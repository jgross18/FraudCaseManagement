<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTransactionsM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('test_transactions_m', function (Blueprint $table) {
        $table->foreignId('test_transaction_id');  
        $table->string('m1', 10)->nullable();
        $table->string('m2', 10)->nullable();
        $table->string('m3', 10)->nullable();
        $table->string('m4', 10)->nullable();
        $table->string('m5', 10)->nullable();
        $table->string('m6', 10)->nullable();
        $table->string('m7', 10)->nullable();
        $table->string('m8', 10)->nullable();
        $table->string('m9', 10)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_transactions_m');
    }
}
