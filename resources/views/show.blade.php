@extends('layouts.app')

@section('content')

<div class="container">
<div class="card uper">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">categories</th>
      <th scope="col">supprimer</th>
      <th scope="col">modifier</th>

    </tr>
  </thead>
 
 <tbody>
   
    <tr>

      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td> 
      <td></td>
     
    <td>
      <form method="get" action="{{route('produit.delete', $product->id )}}">
    @csrf
          <div class="control">
                <button type="submit" class="btn btn-danger">supprimer</button> 
            </div>
    </form>
      </td>      
      
      <td>
      <form method="get" action="{{route('produit.edit', $product->id )}}">
    @csrf
          <div class="control">
                <button type="submit" class="btn btn-succes">modifier</button> 
            </div>
    </form>
      </td>

    </tr>
  </tbody>
</table>

</div>
</div>



@endsection
