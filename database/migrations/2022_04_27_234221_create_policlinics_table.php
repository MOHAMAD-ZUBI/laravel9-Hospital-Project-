<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliclinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policlinics', function (Blueprint $table) {
            $table->id();
            // new created ones
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->text('description',10000)->nullable();
            $table->string('image')->nullable();
            $table->string('detail',1000)->nullable();
            $table->string('status',6)->default('False');
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
        Schema::dropIfExists('policlinics');
    }
}
