<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class cart extends Migration
{
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
