<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epoch extends Model
{
    protected $table    = 'epoch';
    protected $fillable = ['name_epoch'];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
