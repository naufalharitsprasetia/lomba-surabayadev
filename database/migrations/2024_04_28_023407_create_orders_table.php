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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('order_code');
            $table->string('order_total');
            $table->string('order_subtotal');
            $table->string('order_payment_type');
            $table->string('order_date');
            $table->string('order_address');
            $table->string('order_region');
            $table->string('order_city');
            $table->string('order_postal_code');
            $table->string('order_buyer_name');
            $table->string('order_buyer_email');
            $table->string('order_buyer_telp');
            $table->string('order_recipient_name');
            $table->string('order_recipient_email');
            $table->string('order_recipient_telp');
            $table->string('order_coupun');
            $table->string('order_coupun_discount');
            $table->string('order_shipping_date');
            $table->string('order_shipping_type');
            $table->string('order_shipping_cost');
            $table->string('order_status');
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
        Schema::dropIfExists('orders');
    }
};
