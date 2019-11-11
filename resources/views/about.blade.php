@extends('layouts.app')

@section('content')
    <div style="background: white;">
        <div class="container">
            <div class="jumbotron" style="margin-top: 1em;">
                <h1 class="center" style="white-space: nowrap;">SAVE THE W<i class="fa fa-heart"></i>RLD</h1>
                <p style="font-size: 1.2rem;">Our website is dedicated to encouraging dog adoption. Approximately 3.9 million + dogs enter animal shelters in the United States every year. Each year, 2.7 million + dogs are euthanized because they were not adopted. Our goal is to decrease the amount of unadopted dogs through the use of our website. This is our purpose.</p>
                <p class="center"><a class="btn btn-danger btn-lg" href="/all-dogs" role="button" class="">Save a Dog Today!</a></p>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="albums">
            <div class="album">
                <img src="/assets/about-1.jpg">
                <div class="caption">
                    <h3 class="my-3 heading-text">You Save a Life.</h3>
                    <p>All animals at our shelter are in need of a second chance. They have been lost, given up or abandoned. They are all unwanted and helpless. You are giving them a new life in a loving home.</p>
                </div>
            </div>
            <div class="album">
                <img src="/assets/about-2.jpg">
                <div class="caption">
                    <h3 class="my-3 heading-text">You help break the cycle of pet overpopulation.</h3>
                    <p>There are not enough homes for all the animals that are born every year. Adopting from a shelter helps weaken the pet overpopulation cycle. Each year 8 to 12 million dogs, cats, puppies and kittens are euthanized because there are simply not enough homes for them.</p>
                </div>
            </div>
            <div class="album">
                <img src="/assets/about-3.jpg">
                <div class="caption">
                    <h3 class="my-3 heading-text">You encourage others to adopt animals from shelters.</h3>
                    <p>When your friends ask where you got your amazing pet, you can tell them “at the shelter.” Your adoption may encourage others to do the same. </p>
                </div>
            </div>
        </div>
    </div>
@endsection
