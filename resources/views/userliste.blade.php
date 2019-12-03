@extends('layouts.app')
@section('content')
    <div class="container">
        <p>liste publier par:{{auth()->user()->name}}</p>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">prix</th>
                <th scope="col">category</th>
                <th scope="col">created_at</th>
            </tr>
            </thead>
            <tbody>

            @foreach($product as $product)

                @if(auth()->user()->id==$product->user_id)
                    <tr>
                        <th scope="row">{{$product->user->name}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->created_at}}</td>
                    </tr>
                @endif


            @endforeach
            </tbody>
        </table>


    </div>
    $status = User::find(auth()->user->id)->active !== 0; if (!$status) {Session::logout();}




@endsection