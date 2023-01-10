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
        Schema::create('call_to_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
            $table->string('review_documents')->nullable();
            $table->string('invest_button_text')->nullable();
            $table->string('contact_us_button_text')->nullable();
            $table->boolean('send_notification_when_clicked')->default(false);
            $table->boolean('hide_contact_button')->default(false);
            $table->string('alternate_notification_button')->nullable();
            $table->boolean('use_calendly_meeting_scheduling')->default(false);
            $table->string('calendly_meeting_link')->nullable();
            $table->string('contact_us_external_url')->nullable();
            $table->string('addt_contact_emails')->nullable(); 
            $table->string('confirm_invesment_button_text')->nullable();
            $table->string('transaction_confirmation_message')->nullable();
            $table->boolean('allow_user_to_send_message')->default(false);
            $table->string('addtl_created_emails')->nullable();
            $table->string('learn_more_button')->nullable();     
            $table->string('sign_in_button')->nullable();
            $table->string('external_url')->nullable();
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
        Schema::dropIfExists('call_to_actions');
    }
};
