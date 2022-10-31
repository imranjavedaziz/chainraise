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
        Schema::create('trust_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('bypass_account_setup')->default(false);
            $table->boolean('bypass_kyc_checkup')->default(false);
            $table->boolean('bypass_accreditation_checks')->default(false);
            $table->boolean('bypass_document_restrictions')->default(false);
            $table->boolean('view_all_invite_offers')->default(false);
            $table->boolean('allow_manual_ach_bank_input')->default(false);
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
        Schema::dropIfExists('trust_settings');
    }
};
