<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionM extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_m';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }
}
