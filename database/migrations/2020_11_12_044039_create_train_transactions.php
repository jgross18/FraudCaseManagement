<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('datetime')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('product_code', 100)->nullable();
            $table->bigInteger('card_1')->nullable();
            $table->decimal('card_2', 10, 2)->nullable();
            $table->decimal('card_3', 10, 2)->nullable();
            $table->string('card_4', 300)->nullable();
            $table->decimal('card_5', 8, 2)->nullable();
            $table->string('card_6', 100)->nullable();
            $table->decimal('addr_1', 5, 2)->nullable();
            $table->decimal('addr_2', 5, 2)->nullable();
            $table->decimal('dist_1', 5, 2)->nullable();
            $table->decimal('dist_2', 10, 2)->nullable();
            $table->string('p_emaildomain', 300)->nullable();
            $table->string('r_emaildomain', 300)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_transaction');
    }
}
