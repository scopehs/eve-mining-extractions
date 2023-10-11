<?php

namespace App\Models\EVE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EVE\Character;

class ESIToken extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'esi_tokens';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function character()
    {
        return $this->hasOne(Character::class, 'character_id', 'character_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
