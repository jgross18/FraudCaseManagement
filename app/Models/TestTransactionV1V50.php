<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV1V50 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v1-v50';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }
}
