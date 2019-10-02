<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit product
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('produit.update',$product->id)}}">
          @csrf
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{$product->name}}"/>
          </div> 
          <div class="form-group">
              <label for="quantity">Price :</label>
              <input type="text" class="form-control" name="price" value="{{$product->price}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update product</button>
      </form>
  </div>
</div>
@endsection