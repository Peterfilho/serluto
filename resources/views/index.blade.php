@extends('layouts.app')

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="row center">
    <img class="responsive-img" src="{{ asset('img/logo1.png') }}"></img>
    <h5 class="header col s12 light">Respeito ao ser humano e à natureza</h5>
  </div>
</div>

<div class="section">
  <!--   Icon Section   -->
  <div class="row">

    <div class="col s12 m4 l3 z-depth-1" id="plano" data-aos="fade-right">
      <div class="icon-block">
        <h2 class="center light-green-text"><i class="fas fa-award"></i></h2>
        <h5 class="center">Plano 1</h5>

        <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
      </div>
    </div>
    <div class="col l1">
    </div>
    <div class="col s12 m4 l3 z-depth-1" id="plano" data-aos="fade-up">
      <div class="icon-block">
        <h2 class="center light-green-text"><i class="fas fa-award"></i></h2>
        <h5 class="center">Plano 2</h5>

        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
      </div>
    </div>
    <div class="col l1">
    </div>
    <div class="col s12 m4 l3 z-depth-1" id="plano" data-aos="fade-left">
      <div class="icon-block">
        <h2 class="center light-green-text"><i class="fas fa-award"></i></h2>
        <h5 class="center">Plano 3</h5>

        <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
      </div>
    </div>
    <div class="col l1">
    </div>

  </div>
</div>



@endsection
