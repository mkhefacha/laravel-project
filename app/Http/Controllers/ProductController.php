<?php

namespace App\Http\Controllers;

use App\Repositories\Products;
use App\Traits\ModelScopes;
use App\User;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests\FieldRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
     use ModelScopes;
    public function __construct()
    {
        $this->middleware(['auth', 'confirmed']);
    }

    public function index()
    {
       $product = $this->AllProducts();
        $category = Category::all();
        return view('liste',compact('product','category'));

    }

    public function create(Request $request)
    {
        $categories = Category::Plucked();
        return view('create', compact('categories'));

    }

    public function store(FieldRequest $request)
    {

        $request->created($request);


        return redirect()->back()->with('success', 'product is successfully saved');
    }

    public function show(Product $product)
    {

        return view('show', compact('product'));

    }

    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        $categories = Category::Plucked();

        return view('edit', compact('product', 'categories'));

    }


    public function update(FieldRequest $request, Product $product)
    {
        $product->update($request->except('token'));
        $request->storeImage($product);

        return redirect('liste')->with('success', 'product is successfully updated');
    }

    public function destroy(Product $product, $id)
    {
        $this->authorize('delete', $product);
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('liste')->with('danger', 'product is successfully deleted');
    }

    public function listeuser()
    {

        return view('userliste')->with('product', Product::all());


    }

    public function supprimer(Category $category)
    {

        $category->delete();
        return back();
    }



}




