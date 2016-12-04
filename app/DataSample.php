<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSample extends Model
{
    protected $table = 'session_data';

    public $timestamps = false;

    protected $fillable = ['duration', 'footsteps', 'activity_id', 'distance', 'geometry', 'calories', 'date'];
}
