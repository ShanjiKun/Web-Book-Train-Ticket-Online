<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'train';
    protected $guarded = [];
    protected $primaryKey = 'train_id';
    public $timestamps = false;
    public $incrementing = false;
}
