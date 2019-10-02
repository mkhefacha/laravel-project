<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table='products';
    protected $fillable = ['name', 'price','categories_id'];


public function category()
{

	return $this->belongsTo('App\Category');
}


}
