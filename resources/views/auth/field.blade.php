<div class="col-md-6">

    <input id="{{$id}}" type="{{$type}}" class="form-control @error('name') is-invalid @enderror" name="{{$name}}"
           value="{{ old('$name') }}" autocomplete="name" autofocus placeholder="{{$placeholder}}">

    @error($name)
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror

</div>