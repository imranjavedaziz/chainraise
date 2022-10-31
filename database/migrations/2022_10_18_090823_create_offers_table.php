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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('issuer_id');
            $table->foreign('issuer_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('min_investment')->nullable();
            $table->string('goal')->nullable();
            $table->string('pledged')->nullable();
            $table->string('max_raise')->nullable();
            $table->string('price_per_unit')->nullable();
            $table->string('industry')->nullable();
            $table->string('disclosure')->nullable();
            $table->string('type')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('summary')->nullable();
            $table->string('short_description')->nullable();
            $table->string('description')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('offers');
    }
};
