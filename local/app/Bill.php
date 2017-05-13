<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    protected $guarded = [];
    protected $primaryKey = 'bill_id';
    public $timestamps = false;
}
