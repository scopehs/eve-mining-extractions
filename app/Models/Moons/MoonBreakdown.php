<?php

namespace App\Models\Moons;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoonBreakdown extends Model
{
    use HasFactory;

    /**
    * @var string
    */
    protected $table = 'moon_breakdowns';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moon()
    {
        return $this->belongsTo(Moon::class, 'moon_id', 'moon_id');
    }
}
