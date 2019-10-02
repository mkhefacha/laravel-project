<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests\FieldRequest;
class ProductController extends Controller
{
   
public function index()
{
	$product=Product::orderBy('created_at','asc')->paginate(2);
    return view('liste',compact('product'));
    }

     public function create()
    {
    return view('create')->with('category',Category::all());
    }

    public function store(FieldRequest $request)
    {
        
         $validatedData = $request->validated();
        Product::create($validatedData);

        
        return redirect()->back()->with('success', 'product is successfully saved');;
}

public function show($id)
{
	$product=Product::findOrFail($id);
    //$category=Category::whereId($id);
    return view('show')->with('product',$product)
                       ->with('category',Category::all());
    }    


public function edit($id)
{
	$product=Product::findOrFail($id);
    return view('edit',compact('product'));
    } 


public function update(Request $request , $id)
{
	 $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        Product::whereId($id)->update($validatedData);

        return redirect('liste')->with('success', 'product is successfully updated');
    } 

public function destroy($id)
{
	$product=Product::findOrFail($id);
    $product->delete();
      return redirect('liste')->with('danger', 'product is successfully deleted'); 
    }

}