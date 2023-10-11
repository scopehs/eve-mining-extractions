<?php

namespace App\Models\EVE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EVE\Corporation;
use App\Models\EVE\Alliance;


class Character extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'characters';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation()
    {
        return $this->hasOne(Corporation::class, 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alliance()
    {
        return $this->hasOne(Alliance::class, 'alliance_id', 'alliance_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chars()
    {
        return $this->hasMany(ESIToken::class);
    }

    public function token()
    {
        return $this->hasOne(ESIToken::class, 'character_id', 'character_id');
    }

}
