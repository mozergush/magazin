<?php

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
        Schema::create('products', function (Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('price');
            $table->integer('quantity');
            $table->text('description');
            $table->text('characteristic');
            $table->string('image',50);
            $table->string('image2',50);
            $table->string('category_slug', 100);
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
        Schema::drop('products');
    }
}
