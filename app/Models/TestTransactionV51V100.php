<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV51V100 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v51-v100';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }}
