<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table    = 'type_plant';
    protected $fillable = ['type_plant','description_plant'];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
