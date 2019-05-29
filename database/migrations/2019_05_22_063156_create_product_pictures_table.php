<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPicturesTable extends Migration
{
    public function up()
    {
        Schema::create('product_pictures', function (Blueprint $table) {
            $table->integer('type_id');
            $table->integerIncrements('picture_id');
            $table->string('path', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_pictures');
    }
}
