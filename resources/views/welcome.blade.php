@extends('layouts.app')

@section('content')
<div class="wrapper2">
</div>
<div class="container">
    <div class="banner-text" style="padding: 5em 0;width: 100%;height: 100%;margin: 5em 0;">
        <h1 class="center mb-4">SAVE THE W<i class="fa fa-heart"></i>RLD</h1>
        <p class="text-center">Welcome to Save The World, a dog adoption website built off the Petfinder database. Below are some dogs available for adoption in your area. Please select a dog for a short biography of the dog as well as information on how to adopt the pet.</p>
    </div>
</div>

<div class="container">
    <ul class="nav nav-tabs d-flex justify-content-center">
        <li class="nav-item heading-text">
            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Dogs Available</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/all-dogs" role="tab">More Dogs</a>
        </li>
    </ul>


  <div class="tab-content">
    <div id="dog-collage"></div>
  </div>
</div>

@endsection
