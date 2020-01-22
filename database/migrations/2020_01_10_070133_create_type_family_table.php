<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeFamilyTable extends Migration
{
    public function up()
    {
        Schema::create('type_family', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namefamily',80);
            $table->text('description_family');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_family');
    }
}
