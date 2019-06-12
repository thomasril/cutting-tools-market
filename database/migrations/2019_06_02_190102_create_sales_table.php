<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id', 25);
            $table->integer('buyer_id');
            $table->string('buyer_name', 50);
            $table->string('recipient_name', 100);
            $table->string('recipient_title', 100);
            $table->string('recipient_phone', 20);
            $table->string('payment_method', 20);
            $table->double('subtotal');
            $table->double('total_price');
            $table->date('order_date');
            $table->string('delivery_id', 20)->nullable();
            $table->date('delivery_date')->nullable();
            $table->string('invoice_id', 20)->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('status', 30);
            $table->string('notif_status', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
