<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'category_id','product_name','quantity','price',
    ];

  	public function order()
    {
    	return $this->belongsTo('Order', 'id');
	}

	public function product()
	{
	    return $this->belongsTo('App\Product', 'product_id', 'id');
	}
}
