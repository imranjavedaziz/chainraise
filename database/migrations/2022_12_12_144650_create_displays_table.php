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
        
        Schema::create('displays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
            $table->boolean('enable_questions')->default(false);
            $table->boolean('funding_process')->default(false);
            $table->boolean('show_funding_end_countdown')->default(false);
            $table->boolean('show_blockchain_info')->default(false);
            $table->boolean('show_funding_progress')->default(false);
            $table->boolean('include_pending_transactions')->default(false);
            $table->string('amount')->nullable();
            $table->boolean('show_blockg_end_date')->default(false);
            $table->boolean('swap_issuer')->default(false);
            $table->boolean('hide_logo_container')->default(false);
            $table->boolean('hide_logo_details')->default(false);
            $table->boolean('hide_logo_marketplace')->default(false);
            $table->boolean('remove_hero_image_mask')->default(false);
            $table->string('offer_tab_name')->nullable();
            $table->string('video_tab_name')->nullable();
            $table->string('document_tab_name')->nullable();
            $table->string('update_tab_name')->nullable();
            $table->string('qa_tab_name')->nullable();
            $table->boolean('hide_contact_us_from')->default(false);
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
        Schema::dropIfExists('displays');
    }
};
