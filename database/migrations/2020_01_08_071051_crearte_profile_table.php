<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearteProfileTable extends Migration
{
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('name',80);
            $table->String('lastname',80);
            $table->String('address',80);
            $table->String('image_profile');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
