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
            $table->integer('foreign_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->string('name');
            $table->text('descr')->nullable();
            $table->integer('price')->nullable();
            $table->integer('popular')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->date('last_update')->nullable();

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null');
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
