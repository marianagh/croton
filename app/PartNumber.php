<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    
}
