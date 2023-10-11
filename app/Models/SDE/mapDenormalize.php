<?php

namespace App\Models\SDE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapDenormalize extends Model
{
    use HasFactory;

    const BELT = 9;

    const CONSTELLATION = 4;

    const MOON = 8;

    const PLANET = 7;

    const REGION = 3;

    const STATION = 15;

    const SUN = 6;

    const SYSTEM = 5;

    const UBIQUITOUS = 2396;

    const COMMON = 2397;

    const UNCOMMON = 2398;

    const RARE = 2400;

    const EXCEPTIONAL = 2401;

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var string
     */
    protected $table = 'mapDenormalize';

    /**
     * @var string
     */
    protected $primaryKey = 'itemID';

/**
     * @return int
     */
    public function getStructureIdAttribute()
    {
        return $this->structure_id;
    }

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->itemName;
    }

    /**
     * @return bool
     */
    public function isConstellation(): bool
    {
        return $this->groupID === self::CONSTELLATION;
    }

    /**
     * @return bool
     */
    public function isRegion(): bool
    {
        return $this->groupID === self::REGION;
    }

    /**
     * @return bool
     */
    public function isSystem(): bool
    {
        return $this->groupID === self::SYSTEM;
    }

    /**
     * @return bool
     */
    public function isSun(): bool
    {
        return $this->groupID === self::SUN;
    }

    /**
     * @return bool
     */
    public function isPlanet(): bool
    {
        return $this->groupID === self::PLANET;
    }

    /**
     * @return bool
     */
    public function isMoon(): bool
    {
        return $this->groupID === self::MOON;
    }
}
