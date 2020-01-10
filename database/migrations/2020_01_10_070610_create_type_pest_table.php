<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypePestTable extends Migration
{
    public function up()
    {
        Schema::create('type_pest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_pest',80);
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_pest');
    }
}
