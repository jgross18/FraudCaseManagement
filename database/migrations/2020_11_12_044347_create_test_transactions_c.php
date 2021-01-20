<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTransactionsC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('test_transactions_c', function (Blueprint $table) {
        $table->foreignId('test_transactions_id');
        $table->integer('c1')->nullable();
        $table->integer('c2')->nullable();  
        $table->integer('c3')->nullable();  
        $table->integer('c4')->nullable();  
        $table->integer('c5')->nullable();  
        $table->integer('c6')->nullable();  
        $table->integer('c7')->nullable();  
        $table->integer('c8')->nullable();  
        $table->integer('c9')->nullable();  
        $table->integer('c10')->nullable();  
        $table->integer('c11')->nullable();  
        $table->integer('c12')->nullable();  
        $table->integer('c13')->nullable();  
        $table->integer('c14')->nullable();    
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_transactions_c');
    }
}
