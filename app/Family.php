<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table    = "type_family";
    protected $fillable = ['namefamily','description'];
}
