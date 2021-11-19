<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToBilets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bilets', function (Blueprint $table) {
            $table->unsignedBigIntiger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigIntiger('relacja_id');
            $table->foreign('relacja_id')->references('id')->on('relacjes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bilets', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['relacja_id']);
        });
    }
}
