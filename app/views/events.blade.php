@extends('layouts.master')

@section('title', 'happy tails! - Events')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script src="/js/side_nav.js"></script>
@stop

@section('content')
    <header>
        @include('partials.events_nav')
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#">Pets</a></li>
                    <li class="tab col s3"><a href="#">Docs</a></li>
                    <li class="tab col s3"><a href="#">Forum</a></li>
                    <li class="tab col s3"><a class="active" href="#">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col sm12 md6 l4">
                    <div class="card large">

                    </div>
                </div>
                <div class="col sm12 md6 l4">
                    <div class="card large">

                    </div>
                </div>
                <div class="col sm12 md6 l4">
                    <div class="card large">

                    </div>
                </div>
            </div>
        </div>
    </main>
@stop