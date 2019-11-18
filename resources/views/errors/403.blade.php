@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h2>{{ $exception->getMessage() }}</h2>
    </div>
@endsection