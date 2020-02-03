<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table    = 'sensors';
    protected $fillable = ['sensors_temperature','sensors_humidity','sensors_ground'];
}
