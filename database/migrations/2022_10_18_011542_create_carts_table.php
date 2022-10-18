<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('session_cart_id');
            $table->unsignedInteger('product_id');
            $table->integer('cantidad');                  
            $table->foreign('session_cart_id')->references('id')->on('session_carts');
            $table->foreign('product_id')->references('id')->on('products');

        });
    }

    public function down()

    {
        Schema::dropIfExists('carts');
    }
};
