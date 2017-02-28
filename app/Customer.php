<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = array('name', 'supplier_id');
    public $timestamps = false;
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

       
       public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
