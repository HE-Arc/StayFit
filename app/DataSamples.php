<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSample extends Model 
{   
    protected $table = 'session_data';
    
    public $timestamps = false;
}