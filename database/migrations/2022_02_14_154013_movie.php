<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->integer('yearOfProduction');
            $table->double('price');
            $table->string('cover')->unique();
            $table->longText('description');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table){
            $table->dropForeign(['category_id']);

        });
        Schema::dropIfExists('movies');
    }
}
