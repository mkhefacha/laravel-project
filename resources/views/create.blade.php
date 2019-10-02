
@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

<div class="card uper">
  <div class="card-header">
    Add Produit
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
      <form method="post" action="{{ route('produit.store') }}">
           @csrf
          <div class="form-group">   
              <label for="name">produit Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
      
          <div class="form-group">
              <label for="quantity">produit Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>


          <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
    <select class="form-control"  name="categories_id">
      @foreach ($category as $categories)
      <option value="{{$categories->id}}">{{$categories->name}}</option>
      @endforeach
    </select>
  </div>
          <button type="submit" class="btn btn-primary">Create product</button>
      </form>
  </div>
</div>
@endsection