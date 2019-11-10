<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivoTable extends Migration
{

    public function up()
    {
        Schema::create('cultivo', function (Blueprint $table) {
            $table->Increments('idcultivo');
            $table->String('name_cultivo',50);
            $table->String('description',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cultivo');
    }
}
