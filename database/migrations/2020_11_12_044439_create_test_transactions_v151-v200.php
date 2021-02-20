<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTransactionsV151V200 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_transactions_v151-v200', function (Blueprint $table) {
            $table->foreignId('test_transaction_id');
            $table->decimal('v151', 10, 2)->nullable();
            $table->decimal('v152', 10, 2)->nullable();
            $table->decimal('v153', 10, 2)->nullable();  
            $table->decimal('v154', 10, 2)->nullable();  
            $table->decimal('v155', 10, 2)->nullable();
            $table->decimal('v156', 10, 2)->nullable();
            $table->decimal('v157', 10, 2)->nullable();
            $table->decimal('v158', 10, 2)->nullable();  
            $table->decimal('v159', 10, 2)->nullable();  
            $table->decimal('v160', 10, 2)->nullable();
            $table->decimal('v161', 10, 2)->nullable();
            $table->decimal('v162', 10, 2)->nullable();
            $table->decimal('v163', 10, 2)->nullable();  
            $table->decimal('v164', 10, 2)->nullable();  
            $table->decimal('v165', 10, 2)->nullable();
            $table->decimal('v166', 10, 2)->nullable();
            $table->decimal('v167', 10, 2)->nullable();
            $table->decimal('v168', 10, 2)->nullable();  
            $table->decimal('v169', 10, 2)->nullable();  
            $table->decimal('v170', 10, 2)->nullable();
            $table->decimal('v171', 10, 2)->nullable();
            $table->decimal('v172', 10, 2)->nullable();
            $table->decimal('v173', 10, 2)->nullable();  
            $table->decimal('v174', 10, 2)->nullable();  
            $table->decimal('v175', 10, 2)->nullable();
            $table->decimal('v176', 10, 2)->nullable();
            $table->decimal('v177', 10, 2)->nullable();
            $table->decimal('v178', 10, 2)->nullable();  
            $table->decimal('v179', 10, 2)->nullable();  
            $table->decimal('v180', 10, 2)->nullable();
            $table->decimal('v181', 10, 2)->nullable();
            $table->decimal('v182', 10, 2)->nullable();
            $table->decimal('v183', 10, 2)->nullable();  
            $table->decimal('v184', 10, 2)->nullable();  
            $table->decimal('v185', 10, 2)->nullable();
            $table->decimal('v186', 10, 2)->nullable();
            $table->decimal('v187', 10, 2)->nullable();
            $table->decimal('v188', 10, 2)->nullable();  
            $table->decimal('v189', 10, 2)->nullable();  
            $table->decimal('v190', 10, 2)->nullable();
            $table->decimal('v191', 10, 2)->nullable();
            $table->decimal('v192', 10, 2)->nullable();
            $table->decimal('v193', 10, 2)->nullable();  
            $table->decimal('v194', 10, 2)->nullable();  
            $table->decimal('v195', 10, 2)->nullable();
            $table->decimal('v196', 10, 2)->nullable();
            $table->decimal('v197', 10, 2)->nullable();
            $table->decimal('v198', 10, 2)->nullable();  
            $table->decimal('v199', 10, 2)->nullable();  
            $table->decimal('v200', 10, 2)->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_transactions_v151-v200');
    }
}
