<?php

namespace App\Http\Controllers\Corporation;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\CorporationLedger;
use App\Http\Controllers\Helpers\ReconMoonAPI;
use App\Http\Controllers\Helpers\EVE;
use Illuminate\Http\Request;

use App\Models\Corporation\Extraction;
use App\Models\Corporation\Observer;
use App\Models\Corporation\ObserverMining;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ExtractionsController extends Controller
{
    public function index() 
    {

        # Get the corporation of the logged in user.
        $corporation = User::where('id', Auth::id())
        ->with('token.character.corporation')
        ->first();

        # If exists and is set, set else 0.
        # https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op
        $corporation_id = $corporation->token->character->corporation_id ?? 0;

        //$corporation_id = [230445889,98127387];
        //$corporation_id = 98127387;

        $extractions = Extraction::where('corporation_id', $corporation_id)
        ->with('moon')
        ->with('moon.solar_system')
        ->with('moon.constellation')
        ->with('moon.region')
        ->with('moon.breakdown')
        ->with('owner')
        ->with('owner.alliance')
        ->orderBy('chunk_arrival_time', 'ASC')
        ->get();
   
        return view('admin.ledger.moons.upcoming', compact('extractions', 'corporation'));
    }

    public function all_extractions() 
    {

        # Get the corporation of the logged in user.
        $corporation = User::where('id', Auth::id())
        ->with('token.character.corporation')
        ->first();

        # If exists and is set, set else 0.
        # https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op
        $corporation_id = $corporation->token->character->corporation_id ?? 0;

        //$corporation_id = [230445889,98127387];
        //$corporation_id = 98127387;

        $extractions = Extraction::orderBy('chunk_arrival_time', 'ASC')
        ->with('moon')
        ->with('moon.solar_system')
        ->with('moon.constellation')
        ->with('moon.region')
        ->with('moon.breakdown')
        ->with('owner')
        ->with('owner.alliance')
        ->orderBy('chunk_arrival_time', 'ASC')
        ->get();
   
        return view('admin.ledger.moons.upcoming', compact('extractions', 'corporation'));
    }

    public function view_corporation_extractions($corporation_id) 
    {
        # Get the corporation of the logged in user.
        $corporation = User::where('id', Auth::id())
        ->with('token.character.corporation')
        ->first();

        # If exists and is set, set else 0.
        # https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op
        $check_corporation_id = $corporation->token->character->corporation_id ?? 0;

        //if($corporation_id == $check_corporation_id) {      
            $extractions = Extraction::where('corporation_id', $corporation_id)
            ->with('moon')
            ->with('moon.solar_system')
            ->with('moon.constellation')
            ->with('moon.region')
            ->with('moon.breakdown')
            ->with('owner')
            ->with('owner.alliance')
            ->orderBy('chunk_arrival_time', 'ASC')
            ->get();
    
            return view('admin.ledger.moons.upcoming', compact('extractions'));
        //}

        return redirect('extractions');
    }

    public function view_extraction($id) 
    {

        $extraction = Extraction::where('id', $id)
        ->with('moon')
        ->with('moon.solar_system')
        ->with('moon.constellation')
        ->with('moon.region')
        ->with('moon.breakdown')
        ->with('owner')
        ->with('owner.alliance')
        ->get();

        return $extraction;
   
        return view('admin.ledger.extraction.view', compact('extraction'));
    }




}

