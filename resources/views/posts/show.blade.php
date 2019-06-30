@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
           <div class="col-8">
               <img src="/storage/{{ $post->image }}" class="w-100">
           </div>

           <div class="col-4">
               <div>
                   <div class="d-flex align-items-center">
                       <div class="pr-3">
                           <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 2.5rem;">
                       </div>
                       <div>
                           <div class="font-weight-bold">
                               <a href="/profile/{{ $post->user->id }}">
                                   <span class="text-dark">{{ $post->user->username }}</span>
                               </a>

                               <a href="#" class="pl-3">S'abonner</a>

                           </div>
                       </div>
                   </div>

                   <hr>

                   <p>
                       <span class="font-weight-bold">
                           <a class="text-dark" href="/profile/{{ $post->user->id }}">
                               {{ $post->user->username }}
                           </a>
                       </span>
                       {{$post->caption}}
                   </p>
               </div>
           </div>
       </div>
    </div>
@stop