@extends('layouts.master')

@section('title', 'happy tails! - Forums')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script src="/js/side_nav.js"></script>
@stop

@section('content')
    <header>
        @include('partials.forums_nav')
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#">Pets</a></li>
                    <li class="tab col s3"><a href="#">Docs</a></li>
                    <li class="tab col s3"><a class="active" href="#">Forum</a></li>
                    <li class="tab col s3"><a href="#">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="section blog-post">
                <div class="card-panel">
                    <a href="#"><h4>Puppy kitty ipsum dolor sit good dog dragging fetch scooby snacks heel smooshy.</h4></a>
                    <div class="chip">
                        <img src="http://placehold.it/50" alt="Foster">
                        Sara Foster
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="section blog-post">
                <div class="card-panel">
                    <a href="#"><h4>Puppy kitty ipsum dolor sit good dog dragging fetch scooby snacks heel smooshy.</h4></a>
                    <div class="chip">
                        <img src="http://placehold.it/50" alt="Foster">
                        Sara Foster
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="section blog-post">
                <div class="card-panel">
                    <a href="#"><h4>Puppy kitty ipsum dolor sit good dog dragging fetch scooby snacks heel smooshy.</h4></a>
                    <div class="chip">
                        <img src="http://placehold.it/50" alt="Foster">
                        Sara Foster
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="section blog-post">
                <div class="card-panel">
                    <a href="#"><h4>Puppy kitty ipsum dolor sit good dog dragging fetch scooby snacks heel smooshy.</h4></a>
                    <div class="chip">
                        <img src="http://placehold.it/50" alt="Foster">
                        Sara Foster
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="section blog-post">
                <div class="card-panel">
                    <a href="#"><h4>Puppy kitty ipsum dolor sit good dog dragging fetch scooby snacks heel smooshy.</h4></a>
                    <div class="chip">
                        <img src="http://placehold.it/50" alt="Foster">
                        Sara Foster
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </main>
@stop
