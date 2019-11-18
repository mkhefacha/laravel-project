@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card uper">

            @include('layouts.errors')

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Publier Par:</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">categories</th>
                    <th scope="col">nombre produit</th>
                    <th scope="col">supprimer</th>
                    <th scope="col">modifier</th>

                </tr>
                </thead>

                <tbody>

                <tr>

                    <th scope="row">{{$product->user->name}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>

                    <td> <img src="{{$product->image}}" class="img-thumbnail" width="25%" height="25%"></td>

                    <td>{{$product->category->name}}</td>
                    <td>{{$product->user->products()->count()}}</td>
                    <td>
                        @can('delete', $product)
                            @method('delete')
                            <form action="{{url('produit/delete/'. $product->id )}}" method="post" >
                            {{ method_field('DELETE')}}
                                {{ csrf_field() }}
                            <div class="control">
                                <button type="submit" class="btn btn-light" onclick="return confirm(' Êtes-vous sûr de vouloir supprimer ?')">
                                    <i class="far fa-trash-alt"></i></button>
                            </div>
                        </form>
                        @endcan
                    </td>

                    <td>
                        @can('update', $product)
                        <form method="get" action="{{route('produit.edit', $product)}}">
                            @csrf

                            <div class="control">
                                <button type="submit" class="btn btn-light"><i class="fas fa-eye"></i></button>
                            </div>

                        </form>
                            @endcan
                    </td>

                </tr>
                </tbody>
            </table>

            <span><p>Tous le produit publier par {{$product->user->name}}:</p></span><br>

            @foreach($product->user->products()->get() as $product)
                {{$product->name}}<br>

            @endforeach


        </div>
    </div>



@endsection
