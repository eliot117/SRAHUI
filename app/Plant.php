<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table    = 'type_plant';
    protected $fillable = ['hortalizas','legumbres'];
}
