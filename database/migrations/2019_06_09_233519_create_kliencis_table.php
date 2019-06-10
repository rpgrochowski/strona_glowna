<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKliencisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kliencis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName', 255);
            $table->string('lastName', 255);
            $table->string('town', 255);
            $table->string('address', 255);
            $table->string('email')->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kliencis');
    }
}
