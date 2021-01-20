<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV301V339 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v301-v339';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }}
