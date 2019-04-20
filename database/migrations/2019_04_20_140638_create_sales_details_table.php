<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_product')->unsigned();
            $table->Integer('id_sale')->unsigned();
            $table->string('jml_beli');
            $table->timestamps();

            $table->foreign('id_product')
            ->references('id')->on('products')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_sale')
            ->references('id')->on('sales')
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
        Schema::dropIfExists('sales_details');
    }
}
