<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'station';
    protected $guarded = [];
    protected $primaryKey = 'station_id';
    public $timestamps = false;
}
