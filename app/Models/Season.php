<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    protected $guarded = [];
    protected $table = 'seasons';

    public function technology()
    {
        return $this->belongsTo(Technology::class, 'technology_id');
    }
}
