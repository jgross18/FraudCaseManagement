<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainTransaction extends Model
{
    public $timestamps = false;
    protected $table = 'train_transactions';
    protected $guarded = [];

    public function identity()
    {
        return $this->hasOne('App\Models\TrainIdentity');
    }

    public function c()
    {
        return $this->hasOne('App\Models\TrainTransactionC');
    }

    public function d()
    {
        return $this->hasOne('App\Models\TrainTransactionD');
    }

    public function m()
    {
        return $this->hasOne('App\Models\TrainTransactionM');
    }

    public function v1_50()
    {
        return $this->hasOne('App\Models\TrainTransactionV1V50');
    }

    public function v51_100()
    {
        return $this->hasOne('App\Models\TrainTransactionV51V100');
    }


    public function v101_150()
    {
        return $this->hasOne('App\Models\TrainTransactionV101V150');
    }

    public function v151_200()
    {
        return $this->hasOne('App\Models\TrainTransactionV151V200');
    }


    public function v201_250()
    {
        return $this->hasOne('App\Models\TrainTransactionV201V250');
    }

    public function v251_300()
    {
        return $this->hasOne('App\Models\TrainTransactionV251V300');
    }


    public function v301_339()
    {
        return $this->hasOne('App\Models\TrainTransactionV301V339');
    }
}
