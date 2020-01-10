<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropsTable extends Migration
{
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name_scientific',80)->unique();
            $table->String('name',50);
            $table->text('description');
            $table->String('image_crop')->nullable();
            $table->unsignedBigInteger('plant_id')->nullable();
            $table->unsignedBigInteger('family_id')->nullable();
            $table->unsignedBigInteger('pest_id')->nullable();
            $table->unsignedBigInteger('epoch_id')->nullable();
            $table->timestamps();

            //Relación
            $table->foreign('plant_id')->references('id')->on('type_plant')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('family_id')->references('id')->on('type_family')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreign('pest_id')->references('id')->on('type_pest')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('epoch_id')->references('id')->on('epoch')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('crops');
    }
}
