<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id','total_amount',
    ];

    public function orderDetails()
	{
	      return $this->hasMany('App\orderDetails');
	}
}
