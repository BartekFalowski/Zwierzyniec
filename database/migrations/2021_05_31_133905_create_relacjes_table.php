<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacjes', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('skad');
            $table->string('dokad');
            $table->string('przystanki');
            $table->date('data');
            $table->string('pociag');
            $table->time('timeod');
            $table->time('timedo');
            $table->rememberToken();
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
        Schema::dropIfExists('relacjes');
    }
}
