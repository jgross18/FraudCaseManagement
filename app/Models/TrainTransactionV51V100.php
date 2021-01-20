<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV51V100 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v51-v100';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }}
