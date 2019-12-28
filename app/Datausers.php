<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datausers extends Model
{
    protected $table    = "data_users";
    protected $fillable = [
        'name','lastname','address','image_profile'
    ];
}
