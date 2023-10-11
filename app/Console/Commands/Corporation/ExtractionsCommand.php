<?php

namespace App\Console\Commands\Corporation;

use App\Http\Controllers\Helpers\CorporationLedger;
use App\Http\Controllers\Helpers\EVE;
use App\Http\Controllers\Helpers\ReconMoonAPI;
use App\Models\Corporation\Extraction;
use App\Models\EVE\Character;
use App\Models\EVE\ESIToken;
use Illuminate\Console\Command;

class ExtractionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'corporation:extractions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets Extractions for All Active Corporations';

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
        # Get all Active Corporations with a directors key.
        $tokens = Character::whereHas('token', function ($query) {
            $query->where('director', '=', 1);
        })
        ->with('token')
        ->get();

        foreach($tokens as $corporation)
        {
            $this->update_extractions($corporation->corporation_id);
            $this->info('Checking Corporation: ' . $corporation->corporation_id);
        }
    }

    public function update_extractions($corporation_id)
    {
        $extractions = CorporationLedger::getExtractions($corporation_id);
        
        /*
            {
            "chunk_arrival_time": "2021-10-10T21:00:59Z",
            "extraction_start_time": "2021-10-03T21:31:08Z",
            "moon_id": 40299597,
            "natural_decay_time": "2021-10-11T00:00:59Z",
            "structure_id": 1037315100486
            }
        */

        if($extractions)
        {
            foreach($extractions as $extraction)
            {
                # Do an APi Call.
                $moon = ReconMoonAPI::getMoon($extraction->moon_id);

                # Got Moon APi Data, Cache it
                if($moon) {
                    ReconMoonAPI::saveAndUpdateMoon($moon);
                }
            
                $exists = Extraction::where('corporation_id', $corporation_id)
                ->where('moon_id', $extraction->moon_id)
                ->where('natural_decay_time', $extraction->natural_decay_time)
                ->first();

                # Does not exist. Add it.
                if(!$exists)
                {
                    $insert = new Extraction;

                    $insert->corporation_id         =       $corporation_id;
                    $insert->moon_id                =       $extraction->moon_id;
                    $insert->extraction_start_time  =       EVE::formatEveDate($extraction->extraction_start_time);
                    $insert->chunk_arrival_time     =       EVE::formatEveDate($extraction->chunk_arrival_time);
                    $insert->natural_decay_time     =       EVE::formatEveDate($extraction->natural_decay_time);
                    $insert->structure_id           =       $extraction->structure_id;
                    $insert->save();
                }

            }

        }
        
       
    }
}
