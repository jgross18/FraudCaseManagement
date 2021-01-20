<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionD extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_d';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }
}
