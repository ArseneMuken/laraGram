@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline pb-4">
                <div class="d-flex align-items-center">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

                </div>

                @can('update', $user->profile)
                    <a href="/post/create">Ajouter une photo</a>
                @endcan
            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">éditer le compte</a>
            @endcan

                <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> publications</div>
                <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> abonnés</div>
                <div class="pr-5"><strong>{{ $user->following->count() }}</strong> abonnements</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            @if (!is_null($user->profile->url))
                <div class="font-weight-bold"><a href="#">{{$user->profile->url}}</a></div>
            @endif
        </div>
    </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
