<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_identity extends Model
{
    public $timestamps = false;

    public function transactions()
    {
        return $this->hasMany('App\Models\test_transaction');
    }
}
