@extends('layouts.master')

@section('title', 'happytails!')

@section('content')
    <div class="hero-title light-blue">
        <h2 class="center">happy tails!</h1>
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
                    <h1 class="center">New Post/ Second/ Third</h1>
                </div>
            </div>
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h1 class="center">view lost/ Second/ Third</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="auth-bar blue">
        login...etc
    </div>
    <!--Start Animals-->
    <div class="row">
        <div class="col s4">
            <div class="card hoverable">
                <div class="card-image ">
                    <img src="img/cat3.jpg">
                    <span class="card-title">Kit</span>
                </div>
                <div class="card-content">
                    <p>Kit is a terrible cat who bites you.</p>
                </div>
            </div>
        </div>
        <div class="col s4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="img/dog1.jpg">
                    <span class="card-title">Ruby</span>
                </div>
                <div class="card-content">
                    <p>A beautiful, shiny pup.</p>
                </div>
            </div>        
        </div>
        <div class="col s4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="img/cat3.jpg">
                    <span class="card-title">Max</span>
                </div>
                <div class="card-content">
                    <p>This isn't Max, this is kit.</p>
                </div>
            </div>        
        </div>
    </div>
    <!--End Animals-->

@stop
