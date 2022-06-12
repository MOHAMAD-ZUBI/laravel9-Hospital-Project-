<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->foreignId('policlinic_id');
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('note')->nullable();
            $table->string('doctorname')->nullable();
            $table->string('ip')->nullable();
            $table->string('price')->nullable();
            $table->string('payment')->nullable();
            $table->string('status',10)->nullable()->default('new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
