<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 * @resource RiskRelease
 * Representa una RiskRelease en el negocio.
 */

class RiskRelease extends Model
{
       protected $fillable = array('description', 'init_date', 'end_date', 'user_id');
       public $timestamps = false;
         /**
    	 * The table associated with the model.
    	 *
     	* @var string
    	 */
    	protected $table = 'riskreleases';

       public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function concession(){
      return $this->hasMany('App\Concession');
    }

}
