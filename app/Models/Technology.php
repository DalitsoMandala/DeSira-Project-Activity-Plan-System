<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    //
    protected $guarded = [];


    // public function activityLocationType()
    // {
    //     return $this->belongsTo(ActivityLocationType::class, 'activity_location_type_id');
    // }

    public function seasons()
    {
        return $this->hasMany(Season::class, 'technology_id');
    }

    public function activityLocations()
    {
        return $this->belongsToMany(ActivityLocation::class, 'location_technology')->withTimestamps();
    }
}
