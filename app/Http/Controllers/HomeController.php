<?php

namespace App\Http\Controllers;
use App\Http\Requests\FieldRequest;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use  App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {/*
        // Role::create(['name'=>'write']);
        //Permission::create(['name'=>'write post']);
        $role = Role::findById(1);
        $permission = Permission::findById(1);
        $role->givePermissionTo($permission);
        return view('home');


        // Role::create(['name'=>'write']);
        //   $permission = Permission::create(['name'=>'edite post']);
        // $role= Role::find(1);
        //  $permission= Permission::find(1);
        // auth()->user()->givePermissionTo('write post');

        // return auth()->user()->getPermissions;

*/
       /* $user = User::all();
        $product=Product::all();
*/



        //   $product = Product::findOrFail($id);
       //$user = User::where('id', 1)->pluck('name', 'id');
       //$user=User::pluck('name', 'id');
         //$categories = Category::pluck('name', 'id');
       //dd($user);



        return view('home');

    }



}
