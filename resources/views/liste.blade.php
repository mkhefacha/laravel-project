@extends('layouts.app')

@section('content')




<div class="container">
<div class="card uper">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />

  @elseif (session()->get('danger'))
    <div class="alert alert-danger">
      {{ session()->get('danger') }}  
    </div><br />
  @endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">detail</th>
      
    </tr>
  </thead>
 
 <tbody>
    @foreach($product as $products)
    <tr>
      <th scope="row">{{$products->id}}</th>
      <td>{{$products->name}}</td>
      <td>{{$products->price}}</td>
      <td> <a href="{{route('produit.show', $products->id )}}">details</a></td>
     
      

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
<div class="row align-items-center justify-content-center">
{{$product->links()}}
</div>
@endsection