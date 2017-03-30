<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @resource PartNumber
 * Representa una PartNumber en el negocio.
 */

class PartNumber extends Model
{
    protected $fillable = array('description', 'name');
    public $timestamps = false;
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partnumbers';

     public function concession(){
            return $this->hasMany('App\Concession');
        }
}
