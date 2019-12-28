<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropsTable extends Migration
{
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name_scientific',50)->unique();
            $table->String('name',20);
            $table->String('description',100);
            $table->String('image_crop');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crops');
    }
}
