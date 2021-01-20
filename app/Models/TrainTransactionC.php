<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionC extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_c';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }
}
