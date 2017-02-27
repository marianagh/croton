<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiskRelease extends Model
{
       protected $fillable = array('description', 'init_date', 'end_date', 'user_id');
       public $timestamps = false;
       
       public function user()
    {
        return $this->belongsTo('App\User');
    }
}
