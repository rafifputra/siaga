<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSlipwayType extends Model
{
	public $timestamps = true;
    public function MSlipway(){

   	return $this->hasMany('MSlipway', 'id');
   
   }
}
