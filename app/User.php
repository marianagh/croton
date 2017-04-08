<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

/**
 * 
 * @resource User
 * Representa una User en el negocio.
 */

class User extends Model implements Authenticatable
{	
	use AuthenticableTrait;
    protected $fillable = array('name','email', 'password');
    public $timestamps = false;

     public function releases()
    {
        return $this->hasMany('App\RiskRelease');
    }
}
