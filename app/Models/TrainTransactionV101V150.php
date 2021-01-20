<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV101V150 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v101-v150';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }}
