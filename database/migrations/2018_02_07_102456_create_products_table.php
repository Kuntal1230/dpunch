<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('seller');
            $table->string('sku');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('undersubcategory_id')->nullable();
            $table->integer('brand_id');
            $table->string('product_condition')->nullable();
            $table->string('product_origin')->nullable();
            $table->string('title');
            $table->string('color');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->string('size_1')->nullable();
            $table->string('size_2')->nullable();
            $table->string('size_3')->nullable();
            $table->string('size_4')->nullable();
            $table->string('size_5')->nullable();
            $table->string('size_6')->nullable();
            $table->string('availability');
            $table->string('image0')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->text('detailes');
            $table->text('specification');
            $table->text('return_replacement');
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
