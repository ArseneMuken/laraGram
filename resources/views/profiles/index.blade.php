@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-bru2-1.cdninstagram.com/vp/d1cd7550a4cb31a338b0ee19d4175c57/5DA8BA4D/t51.2885-19/s150x150/18808933_246767122466597_4207364879583019008_a.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Ajouter une photo</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            @if (!is_null($user->profile->url))
                <div class="font-weight-bold"><a href="#">{{$user->profile->url}}</a></div>
            @endif
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-bru2-1.cdninstagram.com/vp/1332cc2e97f9d581ce2b00dce05cc529/5DBCAFAC/t51.2885-15/sh0.08/e35/c0.105.1100.1100a/s640x640/19534259_327505214350816_2727353470465081344_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-bru2-1.cdninstagram.com/vp/1332cc2e97f9d581ce2b00dce05cc529/5DBCAFAC/t51.2885-15/sh0.08/e35/c0.105.1100.1100a/s640x640/19534259_327505214350816_2727353470465081344_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-bru2-1.cdninstagram.com/vp/1332cc2e97f9d581ce2b00dce05cc529/5DBCAFAC/t51.2885-15/sh0.08/e35/c0.105.1100.1100a/s640x640/19534259_327505214350816_2727353470465081344_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com" class="w-100">
        </div>
    </div>
</div>
@endsection
