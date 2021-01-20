<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV151V200 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v151-v200';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }}
