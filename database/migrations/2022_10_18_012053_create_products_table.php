<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');            
            $table->timestamps();
            $table->double('precio', 8, 2);
            $table->string('nombre', 300);
            $table->string('descripcion');            
            $table->string('imagen_url', 300);            

        });
    }

    public function down()

    {
        Schema::dropIfExists('products');
    }
};
