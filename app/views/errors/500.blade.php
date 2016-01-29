@extends('layouts.master')

@section('title', '404 Furry-Tail Endings')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
@stop

@section('content')
    {{-- hero area --}}
    <div id="overlay">
        <div class="fivehundred z-depth-1">
            <h2 class="white-text right-align">Oops, Something Went Wrong!</h2>
        </div>
    </div>
    {{-- navbar tabs --}}
    <div class="row z-depth-1">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="#">Pets</a></li>
                <li class="tab col s3"><a href="#">Docs</a></li>
                <li class="tab col s3"><a href="#">Forum</a></li>
                <li class="tab col s3"><a href="#">Events</a></li>
            </ul>
        </div>
    </div>
@stop
