<?php

namespace App\Http\Controllers;

use App\Product;
use App\Traits\ModelScopes;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class CollectionController extends Controller
{
    use ModelScopes;

    public function index()
    {



         return view ('colect');
        // $user = User::find(1)->products()->where('name', 'iphon')->get();
        //$user=$this->ScopeUser('name','iphon');
        //   $user = User::doesntHave('products')->count();
        // $users = User::withCount('products')->get()->take(10);
        // $users = User::select('name')->withCount('products')->get()->take(3);
        /*  $users = User::wherehas('products' ,function ($query) {
              $query->where('name', '=', 'iphon')
                  ->orwhere('name', '=', 'sumsung') ;
          })->get();*/
        //$products = $this->ScopeUser()
        //;


        // return response($products);
        // return view('colect',compact('products'));
        //return $products->load(['user' => function ($query) {
        //   $query->orderBy('created_at', 'asc');
        //}]);

        //return view('colect', compact('users'));
        // dump($user);


        /* User::chunk(50, function ($users) {
             foreach ($users as $user) {
                dump($user);
             }
         });*/


//      $user=$this->ScopeUser();


        //foreach ($value->products as $product) {
        //  dump($product->name);
        //}


        //  $product = Product::ScopeUserId()();//or you be use $this->ScopeUserId()
        //return response($product);
        //return view('colect',compact('product'));


        /* $product = Product::whereHas('user', function ($q) {
                 $q->whereName('marwen');
             })->get();

             foreach ($product as $product) {
                 dump ($product->name);
             }*/

        /*   Product::where('name', 'sumsung 8')
               ->chunkById(3, function ($products) {
                   foreach ($products as $product) {
                       Product::where('id', $product->id)
                           ->update(['name' => 'sumsung 9']);
                   }
               });*/


        /*    $user= User::find(1);
           foreach ($user->products as $user) {
               dump($user->name);
             }*/

        /*$product = Product::all()->chunk(3);
        dump($product);*/

        /*  $randomUser = User::inRandomOrder()
              ->first ();

         return  ($randomUser);*/

        //  $product = $this->OrderByPrice('price');
        //return $product;

    }


}