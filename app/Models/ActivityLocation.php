<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLocation extends Model
{
    //
    protected $table = 'activity_locations';
    protected $guarded = [];

    // public function technologies()
    // {
    //     return $this->hasMany(Technology::class, 'activity_location_type_id');
    // }
    public function sites()
    {
        return $this->hasMany(ActivitySite::class, 'activity_location_id');
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'location_technology')->withTimestamps();
    }
}