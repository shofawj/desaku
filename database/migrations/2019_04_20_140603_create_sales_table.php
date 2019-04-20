<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_customer')->unsigned();
            $table->Integer('id_product')->unsigned();
            $table->date('tanggal_beli');
            $table->string('total_beli');
            $table->timestamps();

            $table->foreign('id_product')
            ->references('id')->on('products')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_customer')
            ->references('id')->on('customers')
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
        Schema::dropIfExists('sales');
    }
}
