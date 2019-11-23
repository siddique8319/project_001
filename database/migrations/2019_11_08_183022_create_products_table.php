<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name',255);
            $table->string('slug',40);
            $table->longText('description');
            $table->integer('qty');
            $table->decimal('regular_price',10, 2);
            $table->decimal('discount_price',10, 2)->nullable();
            $table->tinyInteger('status')->default(0)->index();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('featured', 60);
            $table->longText('images');
            $table->integer('discount_condition');
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
        Schema::dropIfExists('products');
    }
}
