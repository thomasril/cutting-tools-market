<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementsTable extends Migration
{
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('procure_id', 20);
            $table->date('reorder_date');
            $table->string('product_id');
            $table->integer('qty');
            $table->date('delivery_date');
            $table->string('supplier');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('procurements');
    }
}
