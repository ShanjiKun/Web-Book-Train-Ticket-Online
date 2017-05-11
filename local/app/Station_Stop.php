<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station_Stop extends Model
{
    protected $table = 'station_stop';
    protected $guarded = [];
    protected $primaryKey = ['trip_id','station_id'];
    public $timestamps = false;
}
