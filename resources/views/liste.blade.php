@extends('layouts.app')

@section('content')




    <div class="container">
        <div class="card uper">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br/>

            @elseif (session()->get('danger'))
                <div class="alert alert-danger">
                    {{ session()->get('danger') }}
                </div><br/>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">category</th>
                    <th scope="col">created_at</th>
                    <th scope="col">detail</th>

                </tr>
                </thead>

                <tbody>
                @foreach($product as $products)
                    <tr>
                        <th scope="row">{{$products->id}}</th>
                        <td>{{$products->name}}</td>
                        <td>{{$products->price}}</td>
                        <td><img src="{{$products->image}}" class="img-thumbnail" width="25%" height="25%"></td>
                        <td>{{$products->category->name}}</td>
                        <td>{{ucwords($products->created_at->formatlocalized('%d %b %G'))}}</td>
                        <td><a href="{{route('produit.show', $products )}}">details</a></td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{route('produit.create')}}">new produit</a>


    <div class="row align-items-center justify-content-center">
        {{$product->links()}}
    </div>
     <h1>liste de categories:</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">delete</th>

        </tr>
        </thead>

        <tbody>
        @foreach($category as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                 {!!Form::open(['route'=>['category.delete',$category] , 'method' => 'post'] ) !!}
                    {!! Form::token() !!}
                        <div class="control">
                           {!! Form::submit('supprimer',['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

@endsection