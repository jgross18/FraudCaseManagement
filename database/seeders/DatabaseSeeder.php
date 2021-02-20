<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Training Data Seeders
      //  $this->call(train_identity_seeder::class);
      //  $this->call(train_transaction_seeder::class);

        // Testing Data Seeders
    //   $this->call(test_identity_seeder::class);
        $this->call(test_transaction_seeder::class);

    }
}

