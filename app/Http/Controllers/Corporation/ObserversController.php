<?php

namespace App\Http\Controllers\Corporation;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\CorporationLedger;
use App\Models\Corporation\Observer;
use App\Models\Corporation\ObserverMining;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObserversController extends Controller
{

    public function view_observed($id) 
    {
        $user_id = Auth::id();

        $can_view = $this->can_view_corporation($user_id);

        $observed = Observer::where('id', $id) 
        ->with('observed.type')
        ->with('observed.character.corporation.alliance')
        ->first();
        
        if($observed->corporation_id == $can_view->character->corporation_id)
        {
            return view('admin.ledger.observed.view', compact('observed'));
        }
        
        return view('admin.ledger.observed.view', compact('observed'));
        //return redirect()->route('index');
    }

    public function update_observers() {
        
        $corporation_id = 230445889;
        # Always send in 1 first to get the headers to check the page count.
        $page = 1;

        $observers = CorporationLedger::getObservers($corporation_id, $page);

        if($observers) 
        {
        # Check the amount of pages! 
        $pages = $observers->pages;

            foreach($observers as $observer) {

                # Found Observers, Check we have them in the DB

                $exists = Observer::where('observer_id', $observer->observer_id)
                ->where('last_updated', $observer->last_updated)
                ->first();

                if(!$exists) 
                {
                    # Does not exist, create it.
                    $insert = new Observer;
                    $insert->observer_id            =       $observer->observer_id;
                    $insert->corporation_id         =       $corporation_id;
                    $insert->observer_type          =       $observer->observer_type;
                    $insert->last_updated           =       $observer->last_updated;
                    $insert->save();
                }

                $this->updateObserverMining($corporation_id, $observer);

            }
        }
    }

    public function updateObserverMining($corporation_id, $observer)
    {
        $page = 1;
        $mining = CorporationLedger::getObserverMining($corporation_id, $observer->observer_id, $page);
        # There is gona be multiple pages, we should paginate this.

        $pages = $mining->pages;

        if($mining) 
        {
            foreach($mining as $ledger)
            {

                $exists = ObserverMining::where('observer_id', $observer->observer_id)
                ->where('character_id', $ledger->character_id)
                ->where('last_updated', $ledger->last_updated)
                ->where('type_id', $ledger->type_id)
                ->where('recorded_corporation_id', $ledger->recorded_corporation_id)
                ->first();

                if(!$exists) 
                {
                    # Does not exist, create it.
                    $insert = new ObserverMining;
                    $insert->observer_id                =       $observer->observer_id;
                    $insert->character_id               =       $ledger->character_id;
                    $insert->recorded_corporation_id    =       $ledger->recorded_corporation_id;
                    $insert->quantity                   =       $ledger->quantity;
                    $insert->type_id                    =       $ledger->type_id;
                    $insert->last_updated               =       $ledger->last_updated;
                    $insert->breakdown                  =       json_encode(array());
                    $insert->save();
                } else {
                    # Exists, update last updated.
                    $exists->quantity                   =       $ledger->quantity;
                    $exists->breakdown                  =       json_encode(array());
                    $exists->save();
                }
            }
        }
    }

    # Checks the character corporation and returns true or false for permission to view observations
    public function can_view_corporation($id) {
        $owner = User::where('id', $id)
        ->with('character.corporation.alliance')
        ->first();

        return $owner;
    }
}
