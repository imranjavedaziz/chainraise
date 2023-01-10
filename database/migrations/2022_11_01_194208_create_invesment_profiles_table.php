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
        Schema::create('invesment_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('net_worth')->nullable();
            $table->string('annual_net_income')->nullable();
            $table->string('highest_education')->nullable();
            $table->string('risk_tolerance')->nullable();
            $table->string('investment_experience')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('assets_under_management')->nullable();
            $table->string('investment_style')->nullable();;
            $table->string('finra_crd')->nullable();;
            $table->string('website')->nullable();;
            $table->string('linkedIn')->nullable();;
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
        Schema::dropIfExists('invesment_profiles');
    }
};
