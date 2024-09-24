<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/bootstrap-4.0.0-dist/css/bootstrap.css" rel="stylesheet" />
        <link href="navbar.css" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand">
        <img src="{{ asset('navlogo.png') }}" alt="Logo" height="50" width="150">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> 
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">HOME</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}">SHOP</a>
          </li>
          @if (Route::has('login'))
        @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}" >CART</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/checkout') }}">CHECKOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">PROFILE</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('profile.show') }}">My Account</a></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/album') }}">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
          </li>
        @endif
        @endauth
      </ul>
    </div>
  </div>
</nav>

<script src="/bootstrap-4.0.0-dist/js/bootstrap.js"></script>

<script src="/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
</header>