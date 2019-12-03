<form method="post" action="{{route('produit.update',$product)}}">
    {{csrf_field() }}

    <div class="form-group">
        {!! form::label('name','produit Name') !!}
        {!! form::text('name',null,[
        'class'=>'form-control',
        'placeholder'=>"ajouter le nom de produit"
    ]) !!}
    </div>
    <div class="form-group">
        <label for="quantity">Price :</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}"/>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">category</label>
        <select class="form-control" name="category_id">
            @foreach ( $category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Update product</button>
</form>
$product = Product::findorfail($id);
$product->name = $request->input('name');
$product->price = $request->input('price');
$product->image = $request->image->store('uplod', 'public');
$product->category_id = $request->input('category_id');
$product->user_id = auth()->id();

$product->save();
