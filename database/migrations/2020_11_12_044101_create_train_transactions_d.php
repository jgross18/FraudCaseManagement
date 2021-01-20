<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTransactionsD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_transactions_d', function (Blueprint $table) {
            $table->foreignId('train_transactions_id');
            $table->decimal('d1')->nullable();
            $table->decimal('d2')->nullable();  
            $table->decimal('d3')->nullable();  
            $table->decimal('d4')->nullable();  
            $table->decimal('d5')->nullable();  
            $table->decimal('d6')->nullable();  
            $table->decimal('d7')->nullable();  
            $table->decimal('d8')->nullable();  
            $table->decimal('d9')->nullable();
            $table->decimal('d10')->nullable();    
            $table->decimal('d11')->nullable();    
            $table->decimal('d12')->nullable();    
            $table->decimal('d13')->nullable();    
            $table->decimal('d14')->nullable();    
            $table->decimal('d15')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_transactions_d');
    }
}
