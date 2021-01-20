<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV201V250 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v201-v250';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }}
