<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = array('name');
    public $timestamps = false;

     public function customers()
    {
        return $this->hasMany('App\Customer');
    }
}
