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
            $table->increments('idProduct');
            $table->string('name',255);
            $table->string('slug');
            $table->text('description');
            $table->string('extract',300);
            $table->decimal('price',5,2);
            $table->string('image',300);
            $table->boolean('visible');
            $table->integer('idCategory')->unsigned();
            $table->foreign('idCategory')
                ->references('idCategory')
                ->on('categories')
                ->onDelete('cascade');
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
