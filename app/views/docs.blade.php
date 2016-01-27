@extends('layouts.master')

@section('title', 'happy tails! - Knowledge')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script src="/js/side_nav.js"></script>
@stop

@section('content')
    <header>
        @include('partials.docs_nav')
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="/">Pets</a></li>
                    <li class="tab col s3"><a class="active" href="#">Docs</a></li>
                    <li class="tab col s3"><a href="/forums">Forum</a></li>
                    <li class="tab col s3"><a href="/events">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="section">
                <h5>What is a Foster Home?</h5>
                <p>A foster home is a temporary living situation for pets in our program while they are awaiting placement in a permanent home.  Foster families provide shelter, food, care and love. The number of animals we can save depends entirely on the number of people who open their homes and hearts to foster them. Fostering a shelter animal is a rewarding experience, but requires hard work and dedication.</p>
            </div>
            <div class="section">
                <h5>What it Takes</h5>
                <p>The ideal foster care provider will have a basic knowledge of animal care and training, as well as a desire to find their foster animal a safe and caring permanent home. As a foster parent you will provide your animals with care including food, water, shelter, litter, training, grooming and trips to the SAPA Medical Clinic to obtain medical treatment when necessary. Foster parents have priority when it comes to adopting their foster animals or arranging adoptions with qualified, interested parties.</p>
            </div>
            <div class="section">
                <h5>What You Get</h5>
                <p>SAPA will provide basic vet care, behavior and training resources, as well as adoption counseling and support as needed. Donations of food, treats, toys, and litter are often available for free to foster parents (Availability of supplies fluctuates with the donations we receive and is not guaranteed). All foster parents are also invited to bring their animals to any adoption events hosted by San Antonio Pets Alive.</p>
            </div>
            <div class="section">
                <h5>How Long?</h5>
                <p>Length of foster care varies based on each animal. Some foster animals may only need a couple weeks of care, while others might need months. The length of time can depend on the animal’s age, medical issues, or adoptability. Foster animals stay in their foster homes until they are adopted out, so marketing your foster animal is an important factor in length of stay!</p>
            </div>
        </div>
    </main>
@stop