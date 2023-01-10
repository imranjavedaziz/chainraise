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
            $table->longText('short_description')->nullable();
            $table->string('security_type')->nullable();
            $table->string('symbol')->nullable();
            $table->string('size')->nullable();
            $table->string('size_label')->nullable();
            $table->string('base_currency')->nullable();
            $table->string('price_per_unit')->nullable();
            $table->string('share_unit_label')->nullable();
            $table->string('total_valuation')->nullable();
            $table->string('commencement_date')->nullable();
            $table->string('funding_end_date')->nullable();
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
