<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @resource User
 * Representa una User en el negocio.
 */

class User extends Model
{
     protected $fillable = array('name');
    public $timestamps = false;

     public function releases()
    {
        return $this->hasMany('App\RiskRelease');
    }
}
