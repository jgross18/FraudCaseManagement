<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTransactionsV251V300 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_transactions_v251-v300', function (Blueprint $table) {
            $table->foreignId('test_transaction_id');
            $table->decimal('v251', 10, 2)->nullable();
            $table->decimal('v252', 10, 2)->nullable();
            $table->decimal('v253', 10, 2)->nullable();  
            $table->decimal('v254', 10, 2)->nullable();  
            $table->decimal('v255', 10, 2)->nullable();
            $table->decimal('v256', 10, 2)->nullable();
            $table->decimal('v257', 10, 2)->nullable();
            $table->decimal('v258', 10, 2)->nullable();  
            $table->decimal('v259', 10, 2)->nullable();  
            $table->decimal('v260', 10, 2)->nullable();
            $table->decimal('v261', 10, 2)->nullable();
            $table->decimal('v262', 10, 2)->nullable();
            $table->decimal('v263', 10, 2)->nullable();  
            $table->decimal('v264', 10, 2)->nullable();  
            $table->decimal('v265', 10, 2)->nullable();
            $table->decimal('v266', 10, 2)->nullable();
            $table->decimal('v267', 10, 2)->nullable();
            $table->decimal('v268', 10, 2)->nullable();  
            $table->decimal('v269', 10, 2)->nullable();  
            $table->decimal('v270', 10, 2)->nullable();
            $table->decimal('v271', 10, 2)->nullable();
            $table->decimal('v272', 10, 2)->nullable();
            $table->decimal('v273', 10, 2)->nullable();  
            $table->decimal('v274', 10, 2)->nullable();  
            $table->decimal('v275', 10, 2)->nullable();
            $table->decimal('v276', 10, 2)->nullable();
            $table->decimal('v277', 10, 2)->nullable();
            $table->decimal('v278', 10, 2)->nullable();  
            $table->decimal('v279', 10, 2)->nullable();  
            $table->decimal('v280', 10, 2)->nullable();
            $table->decimal('v281', 10, 2)->nullable();
            $table->decimal('v282', 10, 2)->nullable();
            $table->decimal('v283', 10, 2)->nullable();  
            $table->decimal('v284', 10, 2)->nullable();  
            $table->decimal('v285', 10, 2)->nullable();
            $table->decimal('v286', 10, 2)->nullable();
            $table->decimal('v287', 10, 2)->nullable();
            $table->decimal('v288', 10, 2)->nullable();  
            $table->decimal('v289', 10, 2)->nullable();  
            $table->decimal('v290', 10, 2)->nullable();
            $table->decimal('v291', 10, 2)->nullable();
            $table->decimal('v292', 10, 2)->nullable();
            $table->decimal('v293', 10, 2)->nullable();  
            $table->decimal('v294', 10, 2)->nullable();  
            $table->decimal('v295', 10, 2)->nullable();
            $table->decimal('v296', 10, 2)->nullable();
            $table->decimal('v297', 10, 2)->nullable();
            $table->decimal('v298', 10, 2)->nullable();  
            $table->decimal('v299', 10, 2)->nullable();  
            $table->decimal('v300', 10, 2)->nullable();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_transactions_v251-v300');
    }
}
