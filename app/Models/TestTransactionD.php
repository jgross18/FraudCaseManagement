<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionD extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_d';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }
}
