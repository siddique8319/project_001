<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password',60);
            $table->string('role',20);
            $table->string('phone_number',16)->nullable();
            $table->text('billing_address')->nullable();
            $table->text('delivery_address')->nullable();
            $table->string('state',30)->nullable();
            $table->integer('country_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
