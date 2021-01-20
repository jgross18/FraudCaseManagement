<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionM extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_m';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }
}
