<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTransactionsV51V100 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_transactions_v51-v100', function (Blueprint $table) {
            $table->foreignId('train_transactions_id');
            $table->decimal('v51', 10, 2)->nullable();
            $table->decimal('v52', 10, 2)->nullable();
            $table->decimal('v53', 10, 2)->nullable();  
            $table->decimal('v54', 10, 2)->nullable();  
            $table->decimal('v55', 10, 2)->nullable();
            $table->decimal('v56', 10, 2)->nullable();
            $table->decimal('v57', 10, 2)->nullable();
            $table->decimal('v58', 10, 2)->nullable();  
            $table->decimal('v59', 10, 2)->nullable();  
            $table->decimal('v60', 10, 2)->nullable();
            $table->decimal('v61', 10, 2)->nullable();
            $table->decimal('v62', 10, 2)->nullable();
            $table->decimal('v63', 10, 2)->nullable();  
            $table->decimal('v64', 10, 2)->nullable();  
            $table->decimal('v65', 10, 2)->nullable();
            $table->decimal('v66', 10, 2)->nullable();
            $table->decimal('v67', 10, 2)->nullable();
            $table->decimal('v68', 10, 2)->nullable();  
            $table->decimal('v69', 10, 2)->nullable();  
            $table->decimal('v70', 10, 2)->nullable();
            $table->decimal('v71', 10, 2)->nullable();
            $table->decimal('v72', 10, 2)->nullable();
            $table->decimal('v73', 10, 2)->nullable();  
            $table->decimal('v74', 10, 2)->nullable();  
            $table->decimal('v75', 10, 2)->nullable();
            $table->decimal('v76', 10, 2)->nullable();
            $table->decimal('v77', 10, 2)->nullable();
            $table->decimal('v78', 10, 2)->nullable();  
            $table->decimal('v79', 10, 2)->nullable();  
            $table->decimal('v80', 10, 2)->nullable();
            $table->decimal('v81', 10, 2)->nullable();
            $table->decimal('v82', 10, 2)->nullable();
            $table->decimal('v83', 10, 2)->nullable();  
            $table->decimal('v84', 10, 2)->nullable();  
            $table->decimal('v85', 10, 2)->nullable();
            $table->decimal('v86', 10, 2)->nullable();
            $table->decimal('v87', 10, 2)->nullable();
            $table->decimal('v88', 10, 2)->nullable();  
            $table->decimal('v89', 10, 2)->nullable();  
            $table->decimal('v90', 10, 2)->nullable();
            $table->decimal('v91', 10, 2)->nullable();
            $table->decimal('v92', 10, 2)->nullable();
            $table->decimal('v93', 10, 2)->nullable();  
            $table->decimal('v94', 10, 2)->nullable();  
            $table->decimal('v95', 10, 2)->nullable();
            $table->decimal('v96', 10, 2)->nullable();
            $table->decimal('v97', 10, 2)->nullable();
            $table->decimal('v98', 10, 2)->nullable();  
            $table->decimal('v99', 10, 2)->nullable();  
            $table->decimal('v100', 10, 2)->nullable();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_transactions_v51-v100');
    }
}
