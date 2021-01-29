<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
           // $table->integer('user_id')->unsigned();
            $table->string('suburb', 100)->comment('The name of the name ');
            $table->string('state', 20)->comment('The name of the name ');
            $table->string('street', 255)->comment('The name of the name ');
            $table->string ('mobile', 20)->comment('required|string|min:8|max:11');
            $table->timestamps();
          //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->index(['mobile', 'user_id']);
             $table->foreignId('user_id')->constrained('users');
          // $table->foreignId('user_id') ->constrained()  ->onUpdate('cascade')  ->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
