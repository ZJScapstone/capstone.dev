@extends('layouts.master')

@section('title', 'happy tails! - Events')

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
                    <li class="tab col s3"><a href="#">Forum</a></li>
                    <li class="tab col s3"><a class="active" href="#">Events</a></li>
                </ul>
            </div>
        </div>
        @include('partials.side_nav')
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