<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestIdentity extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function transactions()
    {
        return $this->hasMany('App\Models\TestTransaction');
    }
}
