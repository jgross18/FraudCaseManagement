<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTransactionsV1V50 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_transactions_v1-v50', function (Blueprint $table) {
            $table->foreignId('train_transaction_id');
            $table->decimal('v1', 10, 2)->nullable();
            $table->decimal('v2', 10, 2)->nullable();
            $table->decimal('v3', 10, 2)->nullable();  
            $table->decimal('v4', 10, 2)->nullable();  
            $table->decimal('v5', 10, 2)->nullable();
            $table->decimal('v6', 10, 2)->nullable();
            $table->decimal('v7', 10, 2)->nullable();
            $table->decimal('v8', 10, 2)->nullable();  
            $table->decimal('v9', 10, 2)->nullable();  
            $table->decimal('v10', 10, 2)->nullable();
            $table->decimal('v11', 10, 2)->nullable();
            $table->decimal('v12', 10, 2)->nullable();
            $table->decimal('v13', 10, 2)->nullable();  
            $table->decimal('v14', 10, 2)->nullable();  
            $table->decimal('v15', 10, 2)->nullable();
            $table->decimal('v16', 10, 2)->nullable();
            $table->decimal('v17', 10, 2)->nullable();
            $table->decimal('v18', 10, 2)->nullable();  
            $table->decimal('v19', 10, 2)->nullable();  
            $table->decimal('v20', 10, 2)->nullable();
            $table->decimal('v21', 10, 2)->nullable();
            $table->decimal('v22', 10, 2)->nullable();
            $table->decimal('v23', 10, 2)->nullable();  
            $table->decimal('v24', 10, 2)->nullable();  
            $table->decimal('v25', 10, 2)->nullable();
            $table->decimal('v26', 10, 2)->nullable();
            $table->decimal('v27', 10, 2)->nullable();
            $table->decimal('v28', 10, 2)->nullable();  
            $table->decimal('v29', 10, 2)->nullable();  
            $table->decimal('v30', 10, 2)->nullable();
            $table->decimal('v31', 10, 2)->nullable();
            $table->decimal('v32', 10, 2)->nullable();
            $table->decimal('v33', 10, 2)->nullable();  
            $table->decimal('v34', 10, 2)->nullable();  
            $table->decimal('v35', 10, 2)->nullable();
            $table->decimal('v36', 10, 2)->nullable();
            $table->decimal('v37', 10, 2)->nullable();
            $table->decimal('v38', 10, 2)->nullable();  
            $table->decimal('v39', 10, 2)->nullable();  
            $table->decimal('v40', 10, 2)->nullable();
            $table->decimal('v41', 10, 2)->nullable();
            $table->decimal('v42', 10, 2)->nullable();
            $table->decimal('v43', 10, 2)->nullable();  
            $table->decimal('v44', 10, 2)->nullable();  
            $table->decimal('v45', 10, 2)->nullable();
            $table->decimal('v46', 10, 2)->nullable();
            $table->decimal('v47', 10, 2)->nullable();
            $table->decimal('v48', 10, 2)->nullable();  
            $table->decimal('v49', 10, 2)->nullable();  
            $table->decimal('v50', 10, 2)->nullable();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_transactions_v1-v50');
    }
}
