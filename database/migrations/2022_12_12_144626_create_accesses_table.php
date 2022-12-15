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
        Schema::create('accesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
            $table->enum('visiblity',['active','no-active','public','preview','invite','coming_soon']);
            $table->enum('offer_status',['open','closed']);
            $table->unsignedBigInteger('allow_list')->nullable();
            $table->foreign('allow_list')->references('id')->on('offers')->onDelete('cascade');
            $table->unsignedBigInteger('deny_list')->nullable();
            $table->foreign('deny_list')->references('id')->on('offers')->onDelete('cascade');
            $table->boolean('allow_referrals')->default(false);
            $table->boolean('allow_non_accredited_investors')->default(false);
            $table->string('max_number_non_accredited')->nullable();
            $table->boolean('allow_editing')->default(false);
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
        Schema::dropIfExists('accesses');
    }
};
