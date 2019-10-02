<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function create()
    {
    return view('category');
    }


      public function store(Request $request)
    {
        
       $category= new Category();
       $category->name=$request->name;  
      
       $category->save();
        return redirect()->back()->with('success', 'product is successfully saved');;
}

}
