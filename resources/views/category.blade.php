
@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>



<div class="card uper">
 @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
    @endif
  <div class="card-header">
    Add category
  </div>
  <div class="card-body">
   

      <form method="post" action="{{ route('category.store') }}">
           @csrf
          <div class="form-group">   
              <label for="name">category Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
      
          <button type="submit" class="btn btn-primary">Create category</button>
      </form>
  </div>
</div>
@endsection