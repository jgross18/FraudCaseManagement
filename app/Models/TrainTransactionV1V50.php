<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV1V50 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v1-v50';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }
}
