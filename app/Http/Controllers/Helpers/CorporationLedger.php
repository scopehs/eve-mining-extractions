<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EVE\Character;
use App\Models\EVE\Corporation;
use App\Models\EVE\Alliance;

use Seat\Eseye\Containers\EsiAuthentication;
use Seat\Eseye\Eseye;

use Seat\Eseye\Exceptions\EsiScopeAccessDeniedException;
use Seat\Eseye\Exceptions\RequestFailedException;

use Exception;

use App\Models\EVE\ESIToken;

class CorporationLedger extends Controller
{   
    /*
     * Endpoint: https://esi.evetech.net/ui/#/Industry/get_corporation_corporation_id_mining_extractions
     * Warning: Monitor Headers, as there may be multiple pages
     */
    public static function getExtractions($corporation_id) {

       $client_id = config('services.eveonline.client_id');
       $secret_key = config('services.eveonline.client_secret');

       $token = Character::where('corporation_id', $corporation_id)
       ->whereHas('token', function ($query) {
           $query->where('director', '=', 1);
       })
       ->with('token')
       ->first();

       if($token)
       {
       $authentication = new EsiAuthentication([
           'client_id'     => $client_id,
           'secret'        => $secret_key,
           'access_token'  => $token->token->token,
           'refresh_token' => $token->token->refresh_token,
           'scopes'        => [
               'esi-industry.read_corporation_mining.v1'
           ],
       ]);

        $esi = new Eseye($authentication);

       try { 

           $response = $esi->invoke('get', '/corporation/{corporation_id}/mining/extractions/', [
               'corporation_id' => $corporation_id,
           ]);

       } catch (EsiScopeAccessDeniedException $e) {
        
        # Scope denied, we should disable the token.

        $token->token->delete();
        return $e;

       } catch (RequestFailedException $e) {

        # Got an error, most likely denied, we should disable the token.
        $token->token->delete();
        return $e;

       } catch (Exception $e) {

        return $e;
       }

       if($response) {
       return $response;
       }

       return false;
    }

   }

    /*
     * Endpoint: https://esi.evetech.net/ui/#/Industry/get_corporation_corporation_id_mining_observers
     * Warning: Monitor Headers, as there may be multiple pages
     */
    public static function getObservers($corporation_id) {

        $client_id = config('services.eveonline.client_id');
        $secret_key = config('services.eveonline.client_secret');
 
        $token = Character::where('corporation_id', $corporation_id)
        ->whereHas('token', function ($query) {
            $query->where('director', '=', 1);
        })
        ->with('token')
        ->first();

        if($token)
        {
        $authentication = new EsiAuthentication([
            'client_id'     => $client_id,
            'secret'        => $secret_key,
            'access_token'  => $token->token->token,
            'refresh_token' => $token->token->refresh_token,
            'scopes'        => [
                'esi-industry.read_corporation_mining.v1'
            ],
        ]);
 
         $esi = new Eseye($authentication);

        try { 
 
            $response = $esi->invoke('get', '/corporation/{corporation_id}/mining/observers/', [
                'corporation_id' => $corporation_id,
                'page'           => 1,
            ]);
 
        } catch (EsiScopeAccessDeniedException $e) {
 
            return $e;
 
        } catch (RequestFailedException $e) {
 
            return $e;
 
        } catch (Exception $e) {
 
            return $e;
        }
 
        return $response;
    }
 
    }

    /*
     * Endpoint: https://esi.evetech.net/ui/#/Industry/get_corporation_corporation_id_mining_observers_observer_id
     * Warning: Monitor Headers, as there may be multiple pages
     */
    public static function getObserverMining($corporation_id, $observer_id, $page) {

        $client_id = config('services.eveonline.client_id');
        $secret_key = config('services.eveonline.client_secret');
 
        $token = Character::where('corporation_id', $corporation_id)
        ->whereHas('token', function ($query) {
            $query->where('director', '=', 1);
        })
        ->with('token')
        ->first();
 
        if($token)
        {
        $authentication = new EsiAuthentication([
            'client_id'     => $client_id,
            'secret'        => $secret_key,
            'access_token'  => $token->token->token,
            'refresh_token' => $token->token->refresh_token,
            'scopes'        => [
                'esi-industry.read_corporation_mining.v1'
            ],
        ]);
 
         $esi = new Eseye($authentication);

        try { 
 
            $response = $esi->invoke('get', '/corporation/{corporation_id}/mining/observers/{observer_id}/', [
                'corporation_id' => $corporation_id,
                'observer_id' => $observer_id,
                'page' => $page,
            ]);
 
        } catch (EsiScopeAccessDeniedException $e) {
 
            return $e;
 
        } catch (RequestFailedException $e) {
 
            return $e;
 
        } catch (Exception $e) {
 
            return $e;
        }
 
        return $response;
    }
    }
}
