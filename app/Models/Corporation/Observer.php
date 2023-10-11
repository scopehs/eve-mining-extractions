<?php

namespace App\Models\Corporation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'observers';

    # Because i'm lazy and cba with $fillable
    protected $guarded = [];

    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function observed()
    {
        # This will return all, but to narrow it down, we need to do it by date.
        return $this->hasMany(ObserverMining::class, 'observer_id', 'observer_id');
    }
}
