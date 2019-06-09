<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name',100);
            $table->string('phone',50);
            $table->text('address');
            $table->string('email',250);
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('initial', 20)->nullable();
            $table->string('role', 100);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
