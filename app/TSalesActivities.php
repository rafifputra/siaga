<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TSalesActivities extends Model
{
    protected $table = 't_sales_activities';
    
    public $timestamps = true;
    
    public function MEmployee(){
    	return $this->belongsTo(MEmployee::class);
    }

    public function MCustomer(){
    	return $this->belongsTo(MCustomer::class);
    }

    public function MShip(){
    	return $this->belongsTo(MShip::class);
    }

    public function TSalesActivityDetail(){
    	return $this->hasMany(TSalesActivityDetail::class, 't_sales_activity_id');
    }

}
