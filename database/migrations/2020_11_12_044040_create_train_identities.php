<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainIdentities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_identities', function (Blueprint $table) {
            $table->foreignId('train_transaction_id');  
            $table->integer('id_01')->nullable();
            $table->integer('id_02')->nullable();
            $table->decimal('id_03', 6, 2)->nullable();
            $table->decimal('id_04', 6, 2)->nullable();
            $table->decimal('id_05', 6, 2)->nullable();
            $table->decimal('id_06', 6, 2)->nullable();
            $table->decimal('id_07', 6, 2)->nullable();
            $table->decimal('id_08', 6, 2)->nullable();
            $table->decimal('id_09', 6, 2)->nullable();
            $table->decimal('id_10', 6, 2)->nullable();
            $table->decimal('id_11', 10, 2)->nullable();
            $table->enum('id_12', ['Found', 'NotFound'])->nullable();

            $table->decimal('id_13', 10, 2)->nullable();
            $table->decimal('id_14', 10, 2)->nullable();
            $table->string('id_15', 100)->nullable();
            $table->string('id_16', 100)->nullable();
            $table->decimal('id_17', 10, 2)->nullable();
            $table->decimal('id_18', 6, 2)->nullable();
            $table->decimal('id_19', 10, 2)->nullable();
            $table->decimal('id_20', 10, 2)->nullable();
            $table->decimal('id_21', 6, 2)->nullable();
            $table->decimal('id_22', 6, 2)->nullable();
            $table->string('id_23', 1000)->nullable();
            $table->decimal('id_24', 6, 2)->nullable();

            $table->decimal('id_25', 6, 2)->nullable();
            $table->decimal('id_26', 6, 2)->nullable();
            $table->string('id_27', 1000)->nullable();
            $table->string('id_28', 1000)->nullable();
            $table->string('id_29', 1000)->nullable();
            $table->string('id_30', 1000)->nullable();
            $table->string('id_31', 1000)->nullable();
            $table->decimal('id_32', 6, 2)->nullable();
            $table->string('id_33', 1000)->nullable();
            $table->string('id_34', 1000)->nullable();
            $table->string('id_35', 10)->nullable();
            $table->string('id_36', 10)->nullable();

            $table->string('id_37', 10)->nullable();
            $table->string('id_38', 10)->nullable();
    

            $table->string('device_type', 500)->nullable();
            $table->string('device_info', 2000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_identity');
    }
}
