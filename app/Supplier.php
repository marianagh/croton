<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @resource Supplier
 * Representa un Supplier en el negocio.
 */

class Supplier extends Model
{
    protected $fillable = array('name');
    public $timestamps = false;
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'suppliers';


     public function customers()
    {
        return $this->hasMany('App\Customer');
    }
}
