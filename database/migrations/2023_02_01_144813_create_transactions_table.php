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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
            $table->unsignedBigInteger('investor_id');
            $table->foreign('investor_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('funds');
            $table->string('kyc_status');
            $table->string('status');
            $table->string('type');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->enum('e_sign',['completed','incomplete']);
            $table->string('source_identityId');
            $table->string('source_externalAccountId');
            $table->string('destination_identityId');
            $table->string('destination_custodialAccountId');
            $table->text('comment');
            $table->string('currency');
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
        Schema::dropIfExists('transactions');
    }
};
