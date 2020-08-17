@extends('layouts.app')

@section('content')
<section class="hero is-info is-medium">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h1 class="title">Laravel Socialite</h1>
          <h2 class="subtitle mb-5">
@guest
  You are a guest.
@else
  You are {{ Auth::user()->name }}. You logged in with {{ Auth::user()->provider }}.
@endguest
          </h2>
        </div>
@guest
        <div class="column is-narrow">
          <div class="box social-buttons">
            <p class="mb-4">Login</p>
            <a class="button social-login line" href="{{ route('login', ['provider' => 'line']) }}">
              <img class="image is-32x32" src="{{ asset('line_32.png') }}">
              <span>Log in with LINE</span>
            </a>
            <a class="button social-login twitter" href="{{ route('login', ['provider' => 'twitter']) }}">
              <img class="image is-32x32" src="{{ asset('twitter.png') }}">
              <span>Log in with Twitter</span>
            </a>
          </div>
        </div>
@endguest
      </div>
    </div>
  </div>
</section>
@endsection
