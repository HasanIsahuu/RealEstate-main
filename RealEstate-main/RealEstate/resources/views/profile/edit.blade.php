<style>
    body {
        background-image:url('https://wallup.net/wp-content/uploads/2015/12/70610-cabin-modern-house-mountain-landscape-simple.jpg');
    }

    
</style>


@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/profile/ {{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf   

        @method('PATCH')

        <div class="row"> 
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4  col-form-laber"></label>

                    <input id="description"
                           type="text"
                           class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                           name="description"
                           value="{{ old('description')  }}"
                           autocomplete="description" autofocus>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>




                <div class="row pt-4">
                    <button class="btn btn-primary"> Save Profile </button>
                </div>


            </div>

        </div>
    </form>
</div>
@endsection