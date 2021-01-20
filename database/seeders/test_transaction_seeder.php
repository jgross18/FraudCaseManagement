<?php

namespace Database\Seeders;

use App\Models\TestTransaction;
use App\Models\TestTransactionC;
use App\Models\TestTransactionD;
use App\Models\TestTransactionM;
use App\Models\TestTransactionV1V50;
use App\Models\TestTransactionV51V100;
use App\Models\TestTransactionV101V150;
use App\Models\TestTransactionV151V200;
use App\Models\TestTransactionV201V250;
use App\Models\TestTransactionV251V300;
use App\Models\TestTransactionV301V339;


use Illuminate\Database\Seeder;
use League\Csv\Reader;

class test_transaction_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = 'database/seeders/raw_data/test_transaction.csv';
        $csv = Reader::createFromPath($file);
        $csv->each(function ($row)  {
            // return false if there is no data
            if ( empty($row)) return false;
            TestTransaction::insert(
                array(
                    'id' => $row[0],
                    'datetime' => $row[1] ?? null,
                    'amount' => $row[2] ?? null,
                    'product_code' => $row[3] ?? null,
                    'card_1' => $row[4] != '' ? $row[4] :  null,
                    'card_2' => $row[5] != '' ?  $row[5] : null,
                    'card_3' => $row[6]!= '' ? $row[6] : null,
                    'card_4' => $row[7] != '' ? $row[7] : null,
                    'card_5' => $row[8] != '' ? $row[8] : null,
                    'card_6' => $row[9] != '' ? $row[9] : null,
                    'addr_1' => $row[10] != '' ? $row[10] : null,
                    'addr_2' => $row[11] != '' ? $row[11] : null,
                    'dist_1' => $row[12] != '' ? $row[12] : null,
                    'dist_2' => $row[13] != '' ? $row[13] : null,
                    'p_emaildomain' => $row[14] != '' ? $row[14] : null,
                    'r_emaildomain' => $row[15]  != '' ? $row[15] : null,
                )
            );

            TestTransactionC::insert(
                array(
                    'test_transactions_id' => $row[0],
                    'c1' => $row[16]  != '' ? $row[16] :  null,
                    'c2' => $row[17] != '' ? $row[17] :  null,
                    'c3' => $row[18]  != '' ? $row[18] :  null,
                    'c4' => $row[19]  != '' ? $row[19] :  null,
                    'c5' => $row[20]  != '' ? $row[20] :  null,
                    'c6' => $row[21]  != '' ? $row[21] :  null,
                    'c7' => $row[22]  != '' ? $row[22] :  null,
                    'c8' => $row[23] != '' ? $row[23] :  null,
                    'c9' => $row[24]  != '' ? $row[24] :  null,
                    'c10' => $row[25]  != '' ? $row[25] :  null,
                    'c11' => $row[26]  != '' ? $row[26] :  null,
                    'c12' => $row[27]  != '' ? $row[27] :  null,
                    'c13' => $row[28]  != '' ? $row[28] :  null,
                    'c14' => $row[29]  != '' ? $row[29] :  null,
                )
            );
        
            TestTransactionD::insert(
                array(
                    'test_transactions_id' => $row[0],
                    'd1' => $row[30]  != '' ? $row[30] : null,
                    'd2' => $row[31] != '' ? $row[31] : null,
                    'd3' => $row[32]  != '' ? $row[32] : null,
                    'd4' => $row[33] != '' ? $row[33] : null,
                    'd5' => $row[34] != '' ? $row[34] : null,
                    'd6' => $row[35]  != '' ? $row[35] : null,
                    'd7' => $row[36] != '' ? $row[36] : null,
                    'd8' => $row[37]  != '' ? $row[37] : null,
                    'd9' => $row[38]  != '' ? $row[38] : null,
                    'd10' => $row[39]  != '' ? $row[39] : null,
                    'd11' => $row[40]  != '' ? $row[40] : null,
                    'd12' =>$row[41] != '' ? $row[41] : null,
                    'd13' => $row[42] != '' ? $row[42] : null,
                    'd14' => $row[43] != '' ? $row[43] : null,
                    'd15' => $row[44] != '' ? $row[44] : null,
                )
            );

            TestTransactionM::insert(
                array(
                    'test_transactions_id' => $row[0],
                    'm1' => $row[45] ?? null,
                    'm2' => $row[46] ?? null,
                    'm3' => $row[47] ?? null,
                    'm4' => $row[48] ?? null,
                    'm5' => $row[49] ?? null,
                    'm6' => $row[50] ?? null,
                    'm7' => $row[51] ?? null,
                    'm8' => $row[52] ?? null,
                    'm9' => $row[53] ?? null,
                )
            );

            $v1v50 = array('test_transactions_id' => $row[0]);
            for ($i = 1; $i <= 50; $i++) {
                array_merge($v1v50, array('v' . strval($i) => $row[53 + $i] != '' ? $row[53 + $i] : null));
            }
            TestTransactionV1V50::insert($v1v50);

            $v51v100 = array('test_transactions_id' => $row[0]);
            for ($i = 51; $i <= 100; $i++) {
                array_merge($v51v100, array('v' . strval($i) => $row[53 + $i] != '' ? $row[53 + $i] : null));
            }

            TestTransactionV51V100::insert($v51v100); 

            $v101v150 = array('test_transactions_id' => $row[0]);
            for ($i = 101; $i <= 150; $i++) {
                array_merge($v101v150, array('v' . strval($i) => $row[53 + $i] != '' ? $row[53 + $i] : null));
            }

            TestTransactionV101V150::insert($v101v150); 

            $v151v200 = array('test_transactions_id' => $row[0]);
            for ($i = 151; $i <= 200; $i++) {
                array_merge($v151v200, array('v' . strval($i) => $row[103 + $i] != '' ? $row[53 + $i] : null));
            }

            TestTransactionV51V100::insert($v151v200); 

            $v201v250 = array('test_transactions_id' => $row[0]);
            for ($i = 201; $i <= 250; $i++) {
                array_merge($v201v250, array('v' . strval($i) => $row[53 + $i] != '' ? $row[53 + $i] : null));
            }
            TestTransactionV201V250::insert($v201v250);

            $v251v300 = array('test_transactions_id' => $row[0]);
            for ($i = 251; $i <= 300; $i++) {
                array_merge($v201v250, array('v' . strval($i) => $row[53 + $i] != '' ? $row[53 + $i] : null));
            }
            TestTransactionV251V300::insert($v251v300);

            $v301v339 = array('test_transactions_id' => $row[0]);
            for ($i = 301; $i <= 339; $i++) {
                array_merge($v301v339, array('v' . strval($i) => $row[53 + $i] != '' ? $row[53 + $i] : null));
            }
            TestTransactionV301V339::insert($v301v339);
            return true;
        });
    }
}
