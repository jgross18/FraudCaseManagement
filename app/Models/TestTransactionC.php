<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionC extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_c';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }
}
