<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivos extends Model
{
    protected $fillable = ['name_scientific', 'name', 'description'];
}
