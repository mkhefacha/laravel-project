@extends('layouts.app')

@section('content')

         @include('layouts.success')
    <div class="card uper">
        <div class="card-body">
            @include('layouts.errors')
            @include('layouts.form')

        </div>
    </div>
@endsection