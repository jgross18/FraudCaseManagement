<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_transaction extends Model
{
    public $timestamps = false;

    public function identity()
    {
        return $this->hasOne('App\Models\test_identity');
    }
}
