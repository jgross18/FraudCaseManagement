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
}
