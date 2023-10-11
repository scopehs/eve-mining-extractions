<?php

namespace App\Http\Controllers\ESI;

use App\Events\UserUpdate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\EVE;
use Illuminate\Support\Facades\Auth;
use App\Models\EVE\Characters;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Seat\Eseye\Containers\EsiAuthentication;
use Seat\Eseye\Eseye;

use Seat\Eseye\Exceptions\EsiScopeAccessDeniedException;
use Seat\Eseye\Exceptions\RequestFailedException;

use Socialite;
use Exception;

use App\Models\EVE\ESIToken;
use App\Models\User;

class ESITokensController extends Controller
{
    /**
     * ESIController constructor.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Redirect the user to the Eve Online authentication page.
     *
     * @return Response
     */

    public function redirectToProvider()
    {
        return Socialite::driver('eveonline')
            ->scopes([
                'publicData',
                'esi-industry.read_corporation_mining.v1', # Get the corporation ledger/observer endpoint
                'esi-corporations.read_titles.v1'          # Only need access to this, to see if they are a director.
            ])
            ->redirect();
    }


    /**
     * Obtain the user information from Eve Online.
     *
     * @return Response
     */

    public function handleProviderCallback()
    {

        $user = Socialite::driver('eveonline')->user();
        //$user_id = Auth::user()->id;

        $character      =   EVE::getAndUpdateCharacter($user->id);
        # Might as well update the corporation in the database.
        EVE::getAndUpdateCorporation($character->corporation_id);

        # If the character is in an alliance, get and update the alliance.
        isset($character->alliance_id) ? EVE::getAndUpdateAlliance($character->alliance_id) : null;

        $roles = $this->checkIfDirector($character->corporation_id, $user);

        if($roles) {
            $director = 1;
        } else {
            $director = 0;
        }

        $localUser = User::where('character_id', $user->id)->first();

        // create a local user with the email and token from Okta
        if (! $localUser) {
            $localUser = new User;
            $localUser->character_id        = $user->id;
            $localUser->name                = $user->name;
            $localUser->save();
          
        } 
        
        ESIToken::updateOrCreate([
            'character_id'                    => $user->id,
        ], [
            'user_id'                         => $localUser->id,
            'name'                            => $user->name,
            'avatar'                          => $user->avatar,
            'token'                           => $user->token,
            'refresh_token'                   => $user->refreshToken,
            'owner_hash'                      => $user->owner_hash,
            'director'                        => $director,
            'active'                          => 1,
        ]);

        $localUser = User::where('character_id', $user->id)->first();

        try {
            Auth::login($localUser);
        } catch (\Throwable $e) {
            return redirect('/login');
        }

        return redirect('/extractions');
    }

    public function checkIfDirector($corporation_id, $token) {

        // Required a director.
        // Endpoint: https://esi.evetech.net/ui/#/Corporation/get_corporations_corporation_id_titles
       $client_id = config('services.eveonline.client_id');
       $secret_key = config('services.eveonline.client_secret');


       $authentication = new EsiAuthentication([
           'client_id'     => $client_id,
           'secret'        => $secret_key,
           'access_token'  => $token->token,
           'refresh_token' => $token->refreshToken,
           'scopes'        => [
               'esi-corporations.read_titles.v1'
           ],
       ]);

        $esi = new Eseye($authentication);

       try { 

           $response = $esi->invoke('get', '/corporations/{corporation_id}/titles/', [
               'corporation_id' => $corporation_id,
           ]);

       } catch (EsiScopeAccessDeniedException $e) {

           return false;

       } catch (RequestFailedException $e) {

           return false;

       } catch (Exception $e) {

           return false;
       }
       
       return true;

   }

}
