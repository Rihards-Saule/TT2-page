@extends('layouts.app')

@section('content')
    <header class="mb-6 rounded">
      <img
        src="/images/banner.png"
        alt=""
        class="rounded-full mb-2"
      >

        <div class="flex justify-between items-center">
          <div>
            <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
          </div>

          <div>
            <a href="" class="bg-orange-500 rounded-full shadow py-2 px-4 text-white">Edit Profile</a>
            <a href="" class="border rounded-full shadow py-2 px-4">Follow</a>

          </div>
        </div>
        
          <img
              src="{{ $user->avatar }}"
              alt=""
              class="rounded-full mr-2"
          >
      </header>

    <hr>

    @include ('_timeline', ['posts' => $user->posts])
@endsection
