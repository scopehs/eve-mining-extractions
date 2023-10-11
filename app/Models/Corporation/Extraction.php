<?php

namespace App\Models\Corporation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SDE\Moon;
use App\Models\SDE\SolarSystem;
use App\Models\Moons\MoonBreakdown;
use App\Models\EVE\Corporation;

class Extraction extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'extractions';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function moon()
    {
        return $this->belongsTo(Moon::class, 'moon_id', 'moon_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function owner()
    {
        return $this->belongsTo(Corporation::class, 'corporation_id', 'corporation_id');
    }

    /**
     * @var boolean
     */
    public $timestamps = false;
}
