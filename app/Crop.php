<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = [
        'name_scientific', 'name', 'description', 'image_crop','plant_id','family_id','pest_id','epoch_id'
    ];

    public function epoch()
    {
        return $this->hasOne(Epoch::class,'id');
    }

    public function family()
    {
        return $this->hasOne(Family::class,'id');
    }

    public function pest()
    {
        return $this->hasOne(Pest::class,'id');
    }

    public function plant()
    {
        return $this->hasOne(Plant::class,'id');
    }
}