<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Models\Moons\MoonBreakdown;

class ReconMoonAPI extends Controller
{
    /*
     * API Call to Recon for Moon Data
     * 
     */
    public static function getMoon($moon_id) 
    {
        $client_id = config('services.recon_moon.client_id');
        $secret_key = config('services.recon_moon.client_secret');
        $url = config('services.recon_moon.url');

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $url,
        ]);

        $request = $client->request('GET', '/api/moon/'.$moon_id, [
            "headers" => [
                "token" => $secret_key,
                "x-gsf-user" => $client_id
            ]
        ]);

        $response = $request->getBody();

        return $response;
    }

    /*
     * Save API Call to Recon for Moon Data
     * 
     */
    public static function saveAndUpdateMoon($moon_data) 
    {
        # Save/Update Moon

        $moon = json_decode($moon_data);

        MoonBreakdown::updateOrCreate([
            'moon_id'                         => $moon->moon_id,
        ], [
            'rarity'                          => $moon->rarity,
            'extraction_value_day'            => $moon->extraction_value_56_day / 56,
            'dna'                             => json_encode($moon->dna),
            'goo'                             => json_encode($moon->goo),
        ]);

    }

    
}
