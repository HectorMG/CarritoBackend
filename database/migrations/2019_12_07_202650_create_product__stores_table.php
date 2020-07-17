<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('product__stores', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('product_id');
        //     $table->bigInteger('store_id');
        //     $table->timestamps();

        //     $table->foreign('product_id')->references('id')->on('products');
        //     $table->foreign('store_id')->references('id')->on('stores');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('product__stores');
    }
}
