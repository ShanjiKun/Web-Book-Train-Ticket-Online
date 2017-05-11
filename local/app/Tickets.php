<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';
    protected $guarded = [];
    protected $primaryKey = 'ticket_id';
    public $timestamps = false;
    public function car(){
    	return $this->belongsTo('App\Car');
    }
    
}
