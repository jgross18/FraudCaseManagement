<?php

namespace Database\Seeders;

use App\Models\TestIdentity;
use Illuminate\Database\Seeder;
use League\Csv\Reader;


class test_identity_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = 'database/seeders/raw_data/test_identity.csv';
        $csv = Reader::createFromPath($file);
        $csv->each(function ($row)  {
            // return false if there is no data
            if ( empty($row)) return false;
               return  TestIdentity::insert(
                    array(
                        'test_transaction_id' => $row[0],
                        'id_01' => $row[1] ? $row[1] : null,
                        'id_02' => $row[2] ? $row[2] : null,
                        'id_03' => $row[3] ? $row[3] : null,
                        'id_04' => $row[4] ? $row[4] : null,
                        'id_05' => $row[5] ? $row[5] : null,
                        'id_06' => $row[6] ? $row[6] : null,
                        'id_07' => $row[7] ? $row[7] : null,
                        'id_08' => $row[8] ? $row[8] : null,
                        'id_09' => $row[9] ? $row[9] : null,
                        'id_10' => $row[10] ? $row[10] : null,
                        'id_11' => $row[11] ? $row[11] : null,
                        'id_12' => $row[12] ? $row[12] : null,
                        'id_13' => $row[13] ? $row[13] : null,
                        'id_14' => $row[14] ? $row[14] : null,
                        'id_15' => $row[15] ? $row[15] : null,
                        'id_16' => $row[16] ? $row[16] : null,
                        'id_17' => $row[17] ? $row[17] : null,
                        'id_18' => $row[18] ? $row[18] : null,
                        'id_19' => $row[19] ? $row[19] : null,
                        'id_20' => $row[20] ? $row[20] : null,
                        'id_21' => $row[21] ? $row[21] : null,
                        'id_22' => $row[22] ? $row[22] : null,
                        'id_23' => $row[23] ? $row[23] : null,
                        'id_24' => $row[24] ? $row[24] : null,
                        'id_25' => $row[25] ? $row[25] : null,
                        'id_26' => $row[26] ? $row[26] : null,
                        'id_27' => $row[27] ? $row[27] : null,
                        'id_28' => $row[28] ? $row[28] : null,
                        'id_29' => $row[29] ? $row[29] : null,
                        'id_30' => $row[30] ? $row[30] : null,
                        'id_31' => $row[31] ? $row[31] : null,
                        'id_32' => $row[32] ? $row[32] : null,
                        'id_33' => $row[33] ? $row[33] : null,
                        'id_34' => $row[34] ? $row[34] : null,
                        'id_35' => $row[35] ? $row[35] : null,
                        'id_36' => $row[36] ? $row[36] : null,
                        'id_37' => $row[37] ? $row[37] : null,
                        'id_38' => $row[38] ? $row[38] : null,
                        'device_info' => $row[39] ? $row[39] : null,
                        'device_type' => $row[40] ? $row[40] : null,
                    )
                );
        });
    }
}