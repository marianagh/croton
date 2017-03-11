<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concession extends Model
{
    protected $fillable = array('name', 'model', 'description', 
    	'status', 'quantity', 'work_purchase_order', 'riskrelease_id',
    	'partnumber_id', 'customer_id');
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

       public function riskrelease()
    {
        return $this->belongsTo('App\RiskRelease');
    }

        public function partnumber()
    {
        return $this->belongsTo('App\PartNumber');
    }

}
