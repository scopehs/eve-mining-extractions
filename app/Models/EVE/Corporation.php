<?php

namespace App\Models\EVE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EVE\Alliance;
use App\Models\EVE\Character;

class Corporation extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'corporations';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alliance()
    {
        return $this->hasOne(Alliance::class, 'alliance_id', 'alliance_id');
    }
}
