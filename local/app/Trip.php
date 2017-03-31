<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trip';
    protected $guarded = [];
    public $timestamps = false;
}
