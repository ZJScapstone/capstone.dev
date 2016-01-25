@extends('layouts.master')

@section('title', 'happytails!')

@section('bottom-script')
<script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });

    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script src="/js/styleFixes.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="/js/app.js"></script>
@stop

@section('content')
<div ng-app="petsApp" ng-controller="PetsController as ctrl">
    <div class="hero-title light-blue">
        <h2 class="center">happy tails!</h1>
    </div>
    <div class="hero-body">
        <div class="row">
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h3 class="center">View Found and Adoptable Pets</h3>
                </div>
            </div>
            <div class="col m4">
                <a href="#pets-create-modal" class="modal-trigger">
                    <div class="card-panel indigo darken-4 white-text hoverable">
                        <h3 class="center">Create A New Pet Listing</h3>
                    </div>
                </a>
            </div>
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h3 class="center">View Lost Pets</h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    {{-- pets create form modal --}}

    <div id="pets-create-modal" class="modal">
        @include('pets.create')
    </div>

    {{-- filters --}}
    <div class="container filters">
        <input type="text" ng-model="search">
    </div>

    <!--Start Animals-->
    <div class="container">
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
    </div>
    <!--End Animals-->

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
@stop
