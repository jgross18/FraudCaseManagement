<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransactionV251V300 extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions_v251-v300';
    protected $guarded = [];

    public function trainTransaction()
    {
        return $this->hasOne('App\Models\TrainTransaction');
    }}
