<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('bill_id');
            $table->string('productname');
            $table->decimal('price',8,2);
            $table->integer('qty');
            $table->decimal('subtotal',8,2);
            $table->integer('tax');
            $table->decimal('taxamount',8,2);
            $table->decimal('total',8,2);
            $table->timestamps();


            // $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');

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
