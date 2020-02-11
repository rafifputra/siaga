<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MShip extends Model
{
	public $timestamps = true;
    public function MShipType(){

        return $this->belongsTo(MShipType::class, 'm_ship_type_id');
    }

}
