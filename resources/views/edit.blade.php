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
            @include('layouts.errors')

            {!! Form::model($product,['route' =>['produit.update',$product],'method'=>'post','enctype'=>'multipart/form-data'])!!}
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
                {!! form::label('name','produit Name') !!}
                {!! form::text('name',null,[
                'class'=>'form-control'

            ]) !!}
            </div>



            <div class="form-group">
                {!! form::label('prix','produit Price') !!}
                {!! form::text('price',null,[
                'class'=>'form-control'

            ]) !!}
            </div>
            <div class="form-group">
                {!! form::label('image',"image d'annonce") !!}

                    <img src="{{$product->image}}" class="img-thumbnail" width="10%" height="10%">


            </div>


            <div class="form-group">
                {!!Form::label('category')!!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control'])
                !!}
            </div>

            <div class="form-group">

                {{Form::file("image", ["class" => "form-group",]) }}
            </div>


            {!! form::submit('mdoifier',['class'=>'btn btn-primary']) !!}

            {!! form::close() !!}


        </div>
    </div>
@endsection
