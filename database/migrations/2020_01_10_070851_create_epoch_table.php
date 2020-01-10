<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpochTable extends Migration
{
    public function up()
    {
        Schema::create('epoch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_epoch',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('epoch');
    }
}
