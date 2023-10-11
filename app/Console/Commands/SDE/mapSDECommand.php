<?php

namespace App\Console\Commands\SDE;

use Illuminate\Console\Command;
use DB;

use App\Models\SDE\mapDenormalize;
use App\Models\SDE\SolarSystem;
use App\Models\SDE\Constellation;
use App\Models\SDE\Region;
use App\Models\SDE\Moon;
use App\Models\SDE\Planet;
use App\Models\SDE\Star;

class mapSDECommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sde:map:denormalize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrates and Maps EVE SDE mapDenormalize to the database;';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    public function handle() {

        $this->info('Migrating mapDenormalize into new tables');

        SolarSystem::truncate();
        Constellation::truncate();
        Region::truncate();
        Moon::truncate();
        Planet::truncate();
        Star::truncate();

        $this->explodeMap();

    }

     /**
     * Explode mapDenormalize table into celestial sub-tables.
     */
     private function explodeMap()
     {
        // extract regions
        DB::table('regions')->truncate();
        DB::table('regions')
        ->insertUsing([
            'region_id', 'name',
        ], DB::table('mapDenormalize')->where('groupID', MapDenormalize::REGION)
        ->select('itemID', 'itemName'));

        // extract constellations
        DB::table('constellations')->truncate();
        DB::table('constellations')
        ->insertUsing([
            'constellation_id', 'region_id', 'name',
        ], DB::table('mapDenormalize')->where('groupID', MapDenormalize::CONSTELLATION)
        ->select('itemID', 'regionID', 'itemName'));

        // extract solar systems
        DB::table('solar_systems')->truncate();
        DB::table('solar_systems')
        ->insertUsing([
            'system_id', 'constellation_id', 'region_id', 'name', 'security', 'x', 'y', 'z'
        ], DB::table('mapDenormalize')->where('groupID', MapDenormalize::SYSTEM)
        ->select('itemID', 'constellationID', 'regionID', 'itemName', 'security', 'x', 'y', 'z'));

        // extract stars
        DB::table('stars')->truncate();
        DB::table('stars')
        ->insertUsing([
            'star_id', 'system_id', 'constellation_id', 'region_id', 'name', 'type_id',
        ], DB::table('mapDenormalize')->where('groupID', MapDenormalize::SUN)
        ->select('itemID', 'solarSystemID', 'constellationID', 'regionID', 'itemName', 'typeID'));

        // extract planets
        DB::table('planets')->truncate();
        DB::table('planets')
        ->insertUsing([
            'planet_id', 'system_id', 'constellation_id', 'region_id', 'name', 'type_id',
            'x', 'y', 'z', 'radius', 'celestial_index',
        ], DB::table('mapDenormalize')->where('groupID', MapDenormalize::PLANET)
        ->select('itemID', 'solarSystemID', 'constellationID', 'regionID', 'itemName', 'typeID',
            'x', 'y', 'z', 'radius', 'celestialIndex'));

        // extract moons
        DB::table('moons')->truncate();
        DB::table('moons')
        ->insertUsing([
            'moon_id', 'planet_id', 'system_id', 'constellation_id', 'region_id', 'name', 'type_id',
            'x', 'y', 'z', 'radius', 'celestial_index', 'orbit_index',
        ], DB::table('mapDenormalize')->where('groupID', MapDenormalize::MOON)
        ->select('itemID', 'orbitID', 'solarSystemID', 'constellationID', 'regionID', 'itemName', 'typeID',
            'x', 'y', 'z', 'radius', 'celestialIndex', 'orbitIndex'));
    }
}
