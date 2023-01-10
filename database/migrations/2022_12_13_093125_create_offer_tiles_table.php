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
        Schema::create('offer_tiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_detail_tabs_id');
            $table->foreign('offer_detail_tabs_id')->references('id')->on('offer_detail_tabs')->onDelete('cascade');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('path')->nullable();
            $table->string('priority')->default(0);
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
        Schema::dropIfExists('offer_tiles');
    }
};
