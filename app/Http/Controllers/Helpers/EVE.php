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
use Carbon\Carbon;

use App\Models\EVE\ESITokens;

class EVE extends Controller
{
    public static function getCharacter($character_id)
    {

        $esi = new Eseye();

        try {

            $response = $esi->invoke('get', '/characters/{character_id}/', [
                'character_id' => $character_id
            ]);
        } catch (RequestFailedException $e) {

            return null;
        } catch (Exception $e) {

            return null;
        }

        return $response;
    }

    public static function getAndUpdateCharacter($character_id)
    {

        $esi = new Eseye();

        try {

            $response = $esi->invoke('get', '/characters/{character_id}/', [
                'character_id' => $character_id
            ]);

            Character::updateOrCreate([
                'character_id'                    => $character_id,
            ], [
                'name'                            => $response->name,
                'corporation_id'                  => $response->corporation_id,
                'alliance_id'                     => isset($response->alliance_id) ? $response->alliance_id : null,
            ]);
        } catch (RequestFailedException $e) {

            return null;
        } catch (Exception $e) {

            return null;
        }

        return $response;
    }


    public static function getCorporation($corporation_id)
    {

        $esi = new Eseye();

        try {

            $response = $esi->invoke('get', '/corporations/{corporation_id}/', [
                'corporation_id' => $corporation_id,
            ]);
        } catch (RequestFailedException $e) {

            return null;
        } catch (Exception $e) {

            return null;
        }

        return $response;
    }

    public static function getAndUpdateCorporation($corporation_id)
    {

        $esi = new Eseye();

        try {

            $response = $esi->invoke('get', '/corporations/{corporation_id}/', [
                'corporation_id' => $corporation_id,
            ]);

            Corporation::updateOrCreate([
                'corporation_id'                              => $corporation_id,
            ], [
                'name'                            => $response->name,
                'alliance_id'                     => isset($response->alliance_id) ? $response->alliance_id : null,
                'ticker'                          => $response->ticker,
            ]);
            
        } catch (RequestFailedException $e) {

            return null;
        } catch (Exception $e) {

            return null;
        }

        return $response;
    }

    public static function getAlliance($alliance_id)
    {

        $esi = new Eseye();

        try {

            $response = $esi->invoke('get', '/alliances/{alliance_id}/', [
                'alliance_id' => $alliance_id,
            ]);
        } catch (RequestFailedException $e) {

            return null;
        } catch (Exception $e) {

            return null;
        }

        return $response;
    }

    public static function getAndUpdateAlliance($alliance_id)
    {

        $esi = new Eseye();

        try {

            $response = $esi->invoke('get', '/alliances/{alliance_id}/', [
                'alliance_id' => $alliance_id,
            ]);

            Alliance::updateOrCreate([
                'alliance_id'                     => $alliance_id,
            ], [
                'name'                            => $response->name,
                'ticker'                          => $response->ticker,
            ]);
        } catch (RequestFailedException $e) {

            return null;
        } catch (Exception $e) {

            return null;
        }

        return $response;
    }

    public static function formatEveDate($date) {
    	$trimmed = rtrim($date, "Z");
    	$dateAndTime = explode("T", $trimmed);
    	$dt = Carbon::parse($dateAndTime[0] . " " . $dateAndTime[1]);   
    	return $dt;   
    }

}
