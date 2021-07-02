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
            $table->id();
            $table->string('name');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('cover_image');
            $table->text('short_description');
            $table->text('long_description');
            $table->text('specification');
            $table->float('reguler_price')->nullable();
            $table->float('sale_price');
            $table->string('SKU')->nullable();
            $table->enum('stock_status',['instock','outofstock'])->default('instock');
            $table->enum('product_status',['reguler','featured','upcoming']);
            $table->unsignedInteger('quantity')->default(10);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
