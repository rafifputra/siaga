<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MShipType extends Model
{
   public function MShip(){

   	return $this->hasMany('MShip', 'id');
   
   }

   public $timestamps = true;
}
