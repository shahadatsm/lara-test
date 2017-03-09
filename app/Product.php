<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id','product_name','quantity','price',
    ];

    public function orderDetails()
	{
	      return $this->belongsTo('orderDetails', 'product_id');
	} 
}
