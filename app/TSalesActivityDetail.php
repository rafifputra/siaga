<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TSalesActivityDetail extends Model
{
	protected $table = 't_sales_activity_details';
	public $timestamps = true;
	
    public function TSalesActivities(){
    	return $this->belongsTo(TSalesActivities::class);
    }
}
