<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('title')->nullable();
            $table->date('dob');
            $table->text('address');
            $table->string('suit')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('entity_name')->nullable();
            $table->string('legal_formation')->nullable();
            $table->string('date_incorporation')->nullable();
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
        Schema::dropIfExists('user_details');
    }
};
