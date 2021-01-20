<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestTransaction extends Model
{
    public $timestamps = false;
    protected $table = 'test_transactions';
    protected $guarded = [];


    public function identity()
    {
        return $this->hasOne('App\Models\TestIdentity');
    }
}
