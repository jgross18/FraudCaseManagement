<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransactionV251V300 extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions_v251-v300';
    protected $guarded = [];

    public function testTransaction()
    {
        return $this->hasOne('App\Models\TestTransaction');
    }}
