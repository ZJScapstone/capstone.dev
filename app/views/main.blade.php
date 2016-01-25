@extends('layouts.master')

@section('title', 'happytails!')

@section('bottom-script')
<script>
    $(document).ready(function() {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });

    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function() {
       var options = [
           {selector: '#test_toggle', offset: 300, callback: 'Materialize.fadeInImage("#test_toggle")'}
       ];
        Materialize.scrollFire(options);
    });

</script>
<script src="/js/styleFixes.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="/js/app.js"></script>
@stop

@section('content')
<div ng-app="petsApp" ng-controller="PetsController as ctrl">
    <div id="overlay">
        <div class="hero-title z-depth-1">
            <h1 class="white-text left-align">happy tails!</h1>
        </div>
    </div>
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
    <div class="hero-body">
        <div class="container">
            <div class="row">
                <div class="col md4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="http://placehold.it/275">
                            <span class="card-title">Fido</span>
                        </div>
                        <div class="card-content">
                            <p>Ace Ventura Pet Description</p>
                        </div>
                    </div>
                </div>
                <div class="col md4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="http://placehold.it/275">
                            <span class="card-title">Meowers</span>
                        </div>
                        <div class="card-content">
                            <p>Ace Ventura Pet Description</p>
                        </div>
                    </div>
                </div>
                <div class="col md4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="http://placehold.it/275">
                            <span class="card-title">Adopt Me</span>
                        </div>
                        <div class="card-content">
                            <p>Ace Ventura Pet Description</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col md4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="http://placehold.it/275">
                        <span class="card-title">Fido</span>
                    </div>
                    <div class="card-content">
                        <p>Ace Ventura Pet Description</p>
                    </div>
                </div>
                    {{-- filters --}}
                    {{-- <div class="container filters">
                        <input type="text" ng-model="search">
                    </div> --}}
                <div class="fixed-action-btn" id="test_toggle">
                    <a class="btn-floating btn-large deep-orange darken-3">
                        <i class="material-icons">shopping_basket</i>
                    </a>
                    <ul>
                        <li>
                            <a class="btn-floating red modal-trigger" href="#pets-create-modal">
                                <i class="material-icons">mode_edit</i>
                            </a>
                        </li>
                        <li>
                            <a class="btn-floating green" href="#">
                                <i class="material-icons">loyalty</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{-- pets create form modal --}}
    <div id="pets-create-modal" class="modal">
        @include('pets.create')
    </div>

    {{-- individual animal modal --}}
    <div class="modal" id="show-pet-modal">
        <h4><% displayedPet.name %></h4>
        <div class="col s3" ng-repeat="path in displayedPet.images">
            <img ng-src="<% path %>">
        </div>
        <p><% displayedPet.description %></p>
        <p>posted by <a href="/users/<% displayedPet.user.id %>"><% displayedPet.user.email %></a></p>
    </div>
</div>
        {{--<div class="row">--}}
            {{--<div class="col m4">--}}
                {{--<div class="card-panel indigo darken-4 white-text hoverable">--}}
                    {{--<h1 class="center">View found/ adoptable</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col m4">--}}
                {{--<a href="#pets-create-modal" class="modal-trigger">--}}
                    {{--<div class="card-panel indigo darken-4 white-text hoverable">--}}
                        {{--<h1 class="center">New Post/ Second/ Third</h1>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col m4">--}}
                {{--<div class="card-panel indigo darken-4 white-text hoverable">--}}
                    {{--<h1 class="center">view lost/ Second/ Third</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}




    <!--Start Animals-->
{{--    <div class="container">
    <div class="row">
        <div class="col m4" ng-repeat="pet in pets | filter:search">
            <div class="card hoverable" ng-click="openPetModal(pet.id)">
                <div class="card-image ">
                    <img src="http://placehold.it/400">
                    <span class="card-title"><% pet.name %></span>
                </div>
                <div class="card-content">
                    <p><% pet.description %></p>
                </div>
            </div>
        </div>
    </div>
    </div>--}}
    <!--End Animals-->
@stop
