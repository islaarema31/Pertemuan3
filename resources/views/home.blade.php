@extends('layouts.navbar')
@section('title','Home')
@section('content')
@include('layouts.icon')
<main>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/1.png') }}" width="100%" height="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/2.jpg') }}" width="100%" height="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/3.jpg') }}" width="100%" height="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Products</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
      </div>
      <h2>Marbel Edu Game</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="{{ route('marbelEdu') }}" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
      </div>
      <h2>Marbel and Friends Kids Game</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div>
      <h2>Riri Story Books</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col"> 
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div>
      <h2>Kolak Kids Song</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
  </div>
</div>

<h2 class="pb-2 border-bottom">News</h2>
<div class="card mb-3">
  <img src="{{ asset('img/4.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <a href="#" class="icon-link">
      Call to action
      <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
    </a>
  </div>
</div>

</main>

@endsection