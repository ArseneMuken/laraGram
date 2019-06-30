@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/post" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                
                <div class="col-8 offset-2">

                    <h1>Ajouter une photo</h1>
                    
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">La légende</label>

                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                               name="caption"
                               value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="custom-file row pb-3">

                        <label for="image" class="col-form-label">Image</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group row pt-3">
                        <button class=" btn btn-danger">Enregistrer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop