<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivitySite extends Model
{
    //
    protected $table = 'activity_sites';
    protected $guarded = [];


    public function activityLocationType()
    {
        return $this->belongsTo(ActivityLocation::class, 'activity_location_id');
    }
}
