<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pest extends Model
{
    protected $table    = 'type_pest';
    protected $fillable = ['name_pest','description_pest'];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
