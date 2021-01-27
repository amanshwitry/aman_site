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
            $table->string('name', 255)->comment('The name of the name ');
            $table->text('description')->comment('The full text description of the product type.');
            $table->decimal('price', $precision = 8, $scale = 4);
            $table->integer('qnt');
            $table->integer(cat_id)->unsigned();
            $table->integer(customer_id)->unsigned();
            $table->foregn(cat_id)->references('id')->on('categories');
            $table->foregn(customer_id)->references('id')->on('customers');
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
