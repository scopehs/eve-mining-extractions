<?php

namespace App\Models\Corporation;

use App\Models\EVE\Character;
use App\Models\SDE\InvType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObserverMining extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'observer_minings';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->hasOne(InvType::class, 'typeID', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character()
    {
        return $this->hasOne(Character::class, 'character_id', 'character_id');
    }
}
