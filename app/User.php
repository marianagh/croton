<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     protected $fillable = array('name');
    public $timestamps = false;

     public function releases()
    {
        return $this->hasMany('App\RiskRelease');
    }
}
