<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV151V200 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v151-v200';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }}
