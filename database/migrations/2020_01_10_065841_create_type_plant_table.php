<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypePlantTable extends Migration
{
    public function up()
    {
        Schema::create('type_plant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_plant',80);
            $table->text('description_plant');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_plant');
    }
}
