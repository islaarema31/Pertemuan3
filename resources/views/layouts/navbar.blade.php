<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <link href="{{ asset('css/features.css') }}" rel="stylesheet">
  </head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Education Studio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Product
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('marbelEdu') }}">Marbel Edu Games</a>
                  <a class="dropdown-item" href="{{ route('marbelFriend') }}">Marbel and Friends Kids Games</a>
                  <a class="dropdown-item" href="{{ route('riri') }}">Riri Story Book</a>
                  <a class="dropdown-item" href="{{ route('kolak') }}">Kolak Kids Songs</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('news') }}">News</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Program
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('karir') }}">Karir</a>
                <a class="dropdown-item" href="{{ route('magang') }}">Magang</a>
                <a class="dropdown-item" href="{{ route('kunjungan') }}">Kunjungan</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us/show">Contact Us</a>
          </li>
        </ul>
        </div>
      </nav>
    </header>
      <div class="container">
        @yield('content')
      </div>
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
        </footer>
      </div>
      
</body>
</html>