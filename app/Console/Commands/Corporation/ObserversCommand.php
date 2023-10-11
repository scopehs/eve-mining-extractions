<?php

namespace App\Console\Commands\Corporation;

use App\Http\Controllers\Helpers\CorporationLedger;
use App\Http\Controllers\Helpers\EVE;
use App\Models\Corporation\Observer;
use App\Models\Corporation\ObserverMining;
use App\Models\EVE\Corporation;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ObserversCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'corporation:observers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets all observations on extractions for all corporations.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $corporations = Corporation::groupBy('corporation_id')->get();

        foreach($corporations as $corporation):
            $this->updateCorporationObservers($corporation->corporation_id);
        endforeach;
    }

    public function updateCorporationObservers($corporation_id) {
        
        # Always send in 1 first to get the headers to check the page count.
        $page = 1;

        $observers = CorporationLedger::getObservers($corporation_id, $page);

        if($observers) 
        {
        # Check the amount of pages! 
        //$pages = $observers->pages;

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
                    
                } else {
                    # Exists, update last updated.
                    $exists->last_updated           =       $observer->last_updated;
                    $exists->save();
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

        $this->info($pages);
        
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

                    EVE::getAndUpdateCharacter($ledger->character_id);
                    $corporation = EVE::getAndUpdateCorporation($ledger->recorded_corporation_id);

                    if(isset($corporation->alliance_id)) { EVE::getAndUpdateAlliance($corporation->alliance_id); } 
                    
                } else {
                    # Exists, update last updated.
                    $exists->last_updated               =       $ledger->last_updated;
                    $exists->quantity                   =       $ledger->quantity;
                    $exists->breakdown                  =       json_encode(array());
                    $exists->save();
                }
            }
        }
    }
}
