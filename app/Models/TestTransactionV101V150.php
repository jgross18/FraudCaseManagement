<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV101V150 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v101-v150';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }}
