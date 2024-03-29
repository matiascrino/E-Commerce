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
          $table->bigIncrements('id');
          $table->string('name', 100);
          $table->string('description', 300);
          $table->decimal('price', 10, 2);
          $table->bigInteger('categorie_id')->unsigned();
          $table->string('featured_img', 300);
          $table->integer('stock');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('categorie_id')
          ->references('id')->on('categories');
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
