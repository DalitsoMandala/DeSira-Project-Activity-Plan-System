<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoilAmendment extends Model
{
    //
    protected $table = 'soil_amendments';
    protected $guarded = [];

    public function locationTechnology()
    {
        return $this->belongsTo(LocationTechnology::class, 'location_technology_id');
    }
}
