<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->integerIncrements('type_id');
            $table->string('name', 100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('product_types');
    }
}
