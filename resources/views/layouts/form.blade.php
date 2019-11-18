{!! Form::open(['route' => 'produit.store','method'=>'post','enctype'=>'multipart/form-data'])!!}
@csrf
<div class="form-group">
    {!! form::label('name','produit Name') !!}
    {!! form::text('name',null,[
    'class'=>'form-control',
    'placeholder'=>"ajouter le nom de produit"
]) !!}
</div>


<div class="form-group">
    {!! form::label('prix','produit Price') !!}
    {!! form::text('price',null,[
    'class'=>'form-control',
    'placeholder'=>"ajouter votre prix"
]) !!}
</div>


<div class="form-group">
    {!!Form::label('category')!!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control'])
    !!}
</div>

<div class="form-group">
    {{Form::file("image", ["class" => "form-group",]) }}
</div>


{!! form::submit('create product',['class'=>'btn btn-primary']) !!}

{!! form::close() !!}


