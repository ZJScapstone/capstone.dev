@extends('layouts.master')

@section('title', 'happy tails! - Forums')

@section('top-script')
    <style>
        header, main, footer {
            padding-left: 240px;
        }

        li.search .search-wrapper i.material-icons {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
@stop

@section('bottom-script')

@stop

@section('content')
    <header>
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
        @include('partials.side_nav')
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
