<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookappointTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookappoint_tbl', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('doc_id');
            $table->string('appointment_date');
            $table->string('appointment_time');
            $table->string('appointment_reason');
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
        Schema::dropIfExists('bookappoint_tbl');
    }
}