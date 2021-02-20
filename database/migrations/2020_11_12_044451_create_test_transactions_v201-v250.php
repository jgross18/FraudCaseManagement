<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTransactionsV201V250 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_transactions_v201-v250', function (Blueprint $table) {
            $table->foreignId('test_transaction_id');
            $table->decimal('v201', 10, 2)->nullable();
            $table->decimal('v202', 10, 2)->nullable();
            $table->decimal('v203', 10, 2)->nullable();  
            $table->decimal('v204', 10, 2)->nullable();  
            $table->decimal('v205', 10, 2)->nullable();
            $table->decimal('v206', 10, 2)->nullable();
            $table->decimal('v207', 10, 2)->nullable();
            $table->decimal('v208', 10, 2)->nullable();  
            $table->decimal('v209', 10, 2)->nullable();  
            $table->decimal('v210', 10, 2)->nullable();
            $table->decimal('v211', 10, 2)->nullable();
            $table->decimal('v212', 10, 2)->nullable();
            $table->decimal('v213', 10, 2)->nullable();  
            $table->decimal('v214', 10, 2)->nullable();  
            $table->decimal('v215', 10, 2)->nullable();
            $table->decimal('v216', 10, 2)->nullable();
            $table->decimal('v217', 10, 2)->nullable();
            $table->decimal('v218', 10, 2)->nullable();  
            $table->decimal('v219', 10, 2)->nullable();  
            $table->decimal('v220', 10, 2)->nullable();
            $table->decimal('v221', 10, 2)->nullable();
            $table->decimal('v222', 10, 2)->nullable();
            $table->decimal('v223', 10, 2)->nullable();  
            $table->decimal('v224', 10, 2)->nullable();  
            $table->decimal('v225', 10, 2)->nullable();
            $table->decimal('v226', 10, 2)->nullable();
            $table->decimal('v227', 10, 2)->nullable();
            $table->decimal('v228', 10, 2)->nullable();  
            $table->decimal('v229', 10, 2)->nullable();  
            $table->decimal('v230', 10, 2)->nullable();
            $table->decimal('v231', 10, 2)->nullable();
            $table->decimal('v232', 10, 2)->nullable();
            $table->decimal('v233', 10, 2)->nullable();  
            $table->decimal('v234', 10, 2)->nullable();  
            $table->decimal('v235', 10, 2)->nullable();
            $table->decimal('v236', 10, 2)->nullable();
            $table->decimal('v237', 10, 2)->nullable();
            $table->decimal('v238', 10, 2)->nullable();  
            $table->decimal('v239', 10, 2)->nullable();  
            $table->decimal('v240', 10, 2)->nullable();
            $table->decimal('v241', 10, 2)->nullable();
            $table->decimal('v242', 10, 2)->nullable();
            $table->decimal('v243', 10, 2)->nullable();  
            $table->decimal('v244', 10, 2)->nullable();  
            $table->decimal('v245', 10, 2)->nullable();
            $table->decimal('v246', 10, 2)->nullable();
            $table->decimal('v247', 10, 2)->nullable();
            $table->decimal('v248', 10, 2)->nullable();  
            $table->decimal('v249', 10, 2)->nullable();  
            $table->decimal('v250', 10, 2)->nullable();       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_transactions_v201-v250');

    }
}
