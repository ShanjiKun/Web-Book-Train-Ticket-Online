<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'car';
    protected $guarded = [];
    protected $primaryKey = 'station_id';
    public $timestamps = false;
    public function type_seat(){
    	return $this->belongsTo('App\Type_Seat');
    }
}
