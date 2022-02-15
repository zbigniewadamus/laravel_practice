<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cast extends Migration
{

    public function up()
    {
        Schema::create('cast', function (Blueprint $table) {
            $table->unsignedInteger('actor_id');
            $table->foreign('actor_id')->references('id')->on('actors');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }


    public function down()
    {
        Schema::table('cast', function (Blueprint $table){
           $table->dropForeign(['actor_id']);
           $table->dropForeign(['movie_id']);
        });
        Schema::dropIfExists('cast');
    }
}
