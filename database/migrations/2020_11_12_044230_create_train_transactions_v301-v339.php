<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTransactionsV301V339 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_transactions_v301-v339', function (Blueprint $table) {
            $table->foreignId('train_transactions_id');
            $table->decimal('v301', 10, 2)->nullable();
            $table->decimal('v302', 10, 2)->nullable();
            $table->decimal('v303', 10, 2)->nullable();  
            $table->decimal('v304', 10, 2)->nullable();  
            $table->decimal('v305', 10, 2)->nullable();
            $table->decimal('v306', 10, 2)->nullable();
            $table->decimal('v307', 10, 2)->nullable();
            $table->decimal('v308', 10, 2)->nullable();  
            $table->decimal('v309', 10, 2)->nullable();  
            $table->decimal('v310', 10, 2)->nullable();
            $table->decimal('v311', 10, 2)->nullable();
            $table->decimal('v312', 10, 2)->nullable();
            $table->decimal('v313', 10, 2)->nullable();  
            $table->decimal('v314', 10, 2)->nullable();  
            $table->decimal('v315', 10, 2)->nullable();
            $table->decimal('v316', 10, 2)->nullable();
            $table->decimal('v317', 10, 2)->nullable();
            $table->decimal('v318', 10, 2)->nullable();  
            $table->decimal('v319', 10, 2)->nullable();  
            $table->decimal('v320', 10, 2)->nullable();
            $table->decimal('v321', 10, 2)->nullable();
            $table->decimal('v322', 10, 2)->nullable();
            $table->decimal('v323', 10, 2)->nullable();  
            $table->decimal('v324', 10, 2)->nullable();  
            $table->decimal('v325', 10, 2)->nullable();
            $table->decimal('v326', 10, 2)->nullable();
            $table->decimal('v327', 10, 2)->nullable();
            $table->decimal('v328', 10, 2)->nullable();  
            $table->decimal('v329', 10, 2)->nullable();  
            $table->decimal('v330', 10, 2)->nullable();
            $table->decimal('v331', 10, 2)->nullable();
            $table->decimal('v332', 10, 2)->nullable();
            $table->decimal('v333', 10, 2)->nullable();  
            $table->decimal('v334', 10, 2)->nullable();  
            $table->decimal('v335', 10, 2)->nullable();
            $table->decimal('v336', 10, 2)->nullable();
            $table->decimal('v337', 10, 2)->nullable();
            $table->decimal('v338', 10, 2)->nullable();  
            $table->decimal('v339', 10, 2)->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_transactions_v301-v339');
    }
}
