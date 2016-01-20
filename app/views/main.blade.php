@extends('layouts.master')

@section('title', 'happttails!')

@section('content')
    <div class="hero-title light-blue">
        <h1 class="center">happy tails!</h1>
    </div>
    <div class="hero-body">
        <div class="row">
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h1 class="center">View found/ adoptable</h1>
                </div>
            </div>
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h1 class="center">New Post</h1>
                </div>
            </div>
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h1 class="center">view lost</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="auth-bar blue">
        login...etc
    </div>
@stop
