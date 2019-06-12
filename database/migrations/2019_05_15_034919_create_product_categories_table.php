<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->integerIncrements('category_id');
            $table->integer('supplier_id');
            $table->string('name', 100);
            $table->string('material', 100)->nullable();
            $table->string('flutes', 100)->nullable();
            $table->string('coating', 100)->nullable();
            $table->string('hardness', 100)->nullable();
            $table->string('picture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
