<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV301V339 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v301-v339';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }}
