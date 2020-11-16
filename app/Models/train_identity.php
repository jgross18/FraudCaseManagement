<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class train_identity extends Model
{
    public $timestamps = false;

    protected $guarded = [];


    public function transactions()
    {
        return $this->hasMany('App\Models\train_transaction');
    }
}
