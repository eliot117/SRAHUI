<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersTable extends Migration
{
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->bigIncrements('idusers');
            $table->string('name',80);
            $table->string('lastname',80);
            $table->string('address',80);
            $table->string('image_profile');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_users');
    }
}
