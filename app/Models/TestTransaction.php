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

    public function c()
    {
        return $this->hasOne('App\Models\TestTransactionC');
    }

    public function d()
    {
        return $this->hasOne('App\Models\TestTransactionD');
    }

    public function m()
    {
        return $this->hasOne('App\Models\TestTransactionM');
    }

    public function v1_50()
    {
        return $this->hasOne('App\Models\TestTransactionV1V50');
    }

    public function v51_100()
    {
        return $this->hasOne('App\Models\TestTransactionV51V100');
    }


    public function v101_150()
    {
        return $this->hasOne('App\Models\TestTransactionV101V150');
    }

    public function v151_200()
    {
        return $this->hasOne('App\Models\TestTransactionV151V200');
    }


    public function v201_250()
    {
        return $this->hasOne('App\Models\TestTransactionV201V250');
    }

    public function v251_300()
    {
        return $this->hasOne('App\Models\TestTransactionV251V300');
    }


    public function v301_339()
    {
        return $this->hasOne('App\Models\TestTransactionV301V339');
    }
}
