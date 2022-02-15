<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Loan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('copy_id');
            $table->foreign('copy_id')->references('id')->on('copies');
            $table->date('dateOfLoan');
            $table->date('dateOfReturn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loans', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['copy_id']);
        });
        Schema::dropIfExists('loans');
    }
}
