<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Seat extends Model
{
    protected $table = 'type_seat';
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'type_seat_id';
    public $timestamps = false;
    public function car(){
    	return $this->hasMany('App\Car');
    }
}
