<?php 
namespace App\Repositories;

use App\Product;


class Products
{
  public function all()
  {

  	return Product::all();
  }


}