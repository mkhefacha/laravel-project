<?php

namespace App\Traits;

use App\Product;
use App\User;

use Illuminate\Support\Facades\DB;

trait ModelScopes
{

    public function ScopeUser()

    {

      /* return User::wherehas('products',function ($query) {
            $query->where('name','iphon');
        })->get();*/


        return Product::where('user_id', '=', '2')
            ->groupBy('user_id')
            ->select('user_id', DB::Raw('count(id) as product_count'))
            ->get();
    }

    // public function ScopeUserId($query)
    //{
    /* return $query->where('user_id', '=', '1')
         ->groupBy('user_id')
         ->select('user_id', DB::Raw('count(id) as product_count'))
         ->get();*/

    //}

    public function OrderByPrice($field, $sort = 'asc')
    {
        return Product::orderby($field, $sort)->get();

    }

    public function AllProducts()
    {
        return Product::orderBy('created_at', 'asc')->paginate(4);
    }

}