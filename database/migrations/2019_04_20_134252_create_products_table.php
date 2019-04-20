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
            $table->Integer('id_category')->unsigned();
            $table->Integer('id_villager')->unsigned();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('jenis');
            $table->string('image');
            $table->timestamps();

            $table->foreign('id_category')
            ->references('id')->on('categories')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_villager')
            ->references('id')->on('villagers')
            ->onUpdate('cascade')
            ->onDelete('restrict');

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
