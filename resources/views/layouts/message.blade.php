@if($flash=session('message'))
    <div class="alert alert-success">
        {{ $flash }}
    </div><br/>
@endif