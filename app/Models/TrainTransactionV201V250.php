<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV201V250 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v201-v250';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }}
