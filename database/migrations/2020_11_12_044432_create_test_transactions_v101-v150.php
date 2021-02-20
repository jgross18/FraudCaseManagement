<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTransactionsV101V150 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_transactions_v101-v150', function (Blueprint $table) {
            $table->foreignId('test_transaction_id');
            $table->decimal('v101', 10, 2)->nullable();
            $table->decimal('v102', 10, 2)->nullable();
            $table->decimal('v103', 10, 2)->nullable();  
            $table->decimal('v104', 10, 2)->nullable();  
            $table->decimal('v105', 10, 2)->nullable();
            $table->decimal('v106', 10, 2)->nullable();
            $table->decimal('v107', 10, 2)->nullable();
            $table->decimal('v108', 10, 2)->nullable();  
            $table->decimal('v109', 10, 2)->nullable();  
            $table->decimal('v110', 10, 2)->nullable();
            $table->decimal('v111', 10, 2)->nullable();
            $table->decimal('v112', 10, 2)->nullable();
            $table->decimal('v113', 10, 2)->nullable();  
            $table->decimal('v114', 10, 2)->nullable();  
            $table->decimal('v115', 10, 2)->nullable();
            $table->decimal('v116', 10, 2)->nullable();
            $table->decimal('v117', 10, 2)->nullable();
            $table->decimal('v118', 10, 2)->nullable();  
            $table->decimal('v119', 10, 2)->nullable();  
            $table->decimal('v120', 10, 2)->nullable();
            $table->decimal('v121', 10, 2)->nullable();
            $table->decimal('v122', 10, 2)->nullable();
            $table->decimal('v123', 10, 2)->nullable();  
            $table->decimal('v124', 10, 2)->nullable();  
            $table->decimal('v125', 10, 2)->nullable();
            $table->decimal('v126', 10, 2)->nullable();
            $table->decimal('v127', 10, 2)->nullable();
            $table->decimal('v128', 10, 2)->nullable();  
            $table->decimal('v129', 10, 2)->nullable();  
            $table->decimal('v130', 10, 2)->nullable();
            $table->decimal('v131', 10, 2)->nullable();
            $table->decimal('v132', 10, 2)->nullable();
            $table->decimal('v133', 10, 2)->nullable();  
            $table->decimal('v134', 10, 2)->nullable();  
            $table->decimal('v135', 10, 2)->nullable();
            $table->decimal('v136', 10, 2)->nullable();
            $table->decimal('v137', 10, 2)->nullable();
            $table->decimal('v138', 10, 2)->nullable();  
            $table->decimal('v139', 10, 2)->nullable();  
            $table->decimal('v140', 10, 2)->nullable();
            $table->decimal('v141', 10, 2)->nullable();
            $table->decimal('v142', 10, 2)->nullable();
            $table->decimal('v143', 10, 2)->nullable();  
            $table->decimal('v144', 10, 2)->nullable();  
            $table->decimal('v145', 10, 2)->nullable();
            $table->decimal('v146', 10, 2)->nullable();
            $table->decimal('v147', 10, 2)->nullable();
            $table->decimal('v148', 10, 2)->nullable();  
            $table->decimal('v149', 10, 2)->nullable();  
            $table->decimal('v150', 10, 2)->nullable();     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_transactions_v101-v150');
    }
}
