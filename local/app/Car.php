<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'car';
    protected $guarded = [];
    protected $primaryKey = 'car_id';
    public $timestamps = false;
    public function type_seat(){
    	return $this->belongsTo('App\Type_Seat');
    }
    public function Tickets(){
    	return $this->hasMany('App\Tickets');
    }
}
