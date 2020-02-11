<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSlipway extends Model
{
    public $timestamps = true;
    public function MSlipwayType(){

        return $this->belongsTo(MSlipwayType::class, 'm_slipway_type_id');
    }
}
