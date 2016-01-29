@extends('layouts.master')

@section('title', 'Furry-tail Endings!')

@section('top-script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">
@stop

@section('bottom-script')
<script>
    // materialize initialization
    $(document).ready(function() {
        $('.modal-trigger').leanModal();
        $('select').material_select();
        var options = [{
            selector: '#test_toggle',
            offset: 300,
            callback: 'Materialize.fadeInImage("#test_toggle")'
        }];
        Materialize.scrollFire(options);

        // navlink fix
        $('.tabs a').click(function(e){
            e.preventDefault();
            window.location = $(this).attr('href');
        });
    });

</script>
<script src="/js/styleFixes.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="/js/dropzone.js"></script>
<script src="/js/app.js"></script>
@stop

@section('content')
<div ng-app="petsApp" ng-controller="PetsController as ctrl">

    {{-- hero area --}}
    <div id="overlay">
        <div class="hero-title z-depth-1">
            <h1 class="white-text left-align"></h1>
        </div>
    </div>

    {{-- navbar tabs --}}
    <div class="row z-depth-1">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="/#main">Pets</a></li>
                <li class="tab col s3"><a href="/posts#docs">Docs</a></li>
                <li class="tab col s3"><a href="/posts#forum">Forum</a></li>
                <li class="tab col s3"><a href="/posts#events">Events</a></li>
            </ul>
        </div>
    </div>

    {{-- circle icons --}}
    <div id="icon-menu">
        <a class="tooltipped btn-floating btn-large deep-orange darken-3" data-position="left" data-tooltip="Menu">
            <i class="material-icons">menu</i>
        </a>
        <ul>
            <li>
                <a class="tooltipped btn-floating red modal-trigger" data-position="left" data-tooltip="New Pet" href="#pets-create-modal" ng-click="verifyUser()">
                    <i class="material-icons">mode_edit</i>
                </a>
            </li>
            <li>
                <a class="tooltipped btn-floating green" data-position="left" data-tooltip="Advanced Search" onclick="$('#search-modal').openModal()">
                    <i class="material-icons">search</i>
                </a>
            </li>
        </ul>
    </div>    

    {{-- search --}}
    <div class="container filters input-field">
        <input type="text" ng-model="search.raw" id="search">
        <label for="search">Search</label>
    </div>

    <a id="main"></a>

    {{-- pets index --}}
    @include('pets.index')

    {{-- individual animal modal --}}
    <div class="modal" id="show-pet-modal">
        @include('pets.show')
    </div>

    {{-- pets create form modal --}}
    <div id="pets-create-modal" class="modal">
        @include('pets.create')
    </div>

    {{-- image upload modal --}}
    <div class="modal" id="image-upload-modal">
        <button class="btn right modal-action modal-close" ng-click="finishNewPet()">done</button>
        <h2 class="center">Let's add some pictures!</h2>
        <p>Click or drag pictures below</p>
        <div id="image-upload">&nbsp;</div>
    </div>

    {{-- show errors modal --}}
    <div class="modal" id="errors">
        <p class="modal-action modal-close modal-dismiss">x</p>
        <div class="container">
            <h2 class="center">Something went wrong!</h2>
            <p><strong>Please review the errors below.</strong></p>
            <p ng-repeat="err in errors"><% err %></p>
        </div>
    </div>

    {{-- auth modal --}}
    <div class="modal" id="auth-modal">
        <p class="modal-action modal-close modal-dismiss">x</p>
        <div class="section container">
            <h4 class="center">Please Login or sign up to post a pet</h4>
            <div class="section row">
                <div class="col m6">
                    <a href="/users/login" class="btn">Login</a>
                </div>
                <div class="col m6">
                    <a href="/users/create" class="btn">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    {{-- search modal --}}
    <div class="modal bottom-sheet" id="search-modal">
    <button class="right red btn" ng-click="clearSearch()">Clear</button>
        <h4 class="center">Advanced Search</h4>
        <div class="row">
            <div class="input-field col s4">
                <input id="pet_name" type="text" ng-model="search.name">
                <label for="pet_name">Pet Name</label>
            </div>
            <div class="input-field col s4">
                <input type="text" id="a_num" ng-model="search.a_num">
                <label for="a_num">Pet ID#</label>
            </div>
            <div class="input-field col s4">
                <input id="pet_color" type="text" ng-model="search.color">
                <label for="pet_color">Pet Color</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <select ng-model="search.age">
                    <option value="" disabled selected>Age</option>
                    <option value="baby">Baby</option>
                    <option value="young">Young</option>
                    <option value="adult">Adult</option>
                    <option value="senior">Senior</option>
                </select>
            </div>
            <div class="input-field col s4">
                <select ng-model="search.size">
                    <option value="" disabled selected>Size</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">Xtra Large</option>
                </select>
            </div>
            <div class="input-field col s4">
                <input type="text" id="search-breed" ng-model="search.breed">
                <label for="search-breed">Breed</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <select id="pet-status" ng-model="search.status">
                    <option value="" disabled selected>Status</option>
                    <option value="available">Available</option>
                    <option value="inprogress">In Progress</option>
                    <option value="adopted">Adopted</option>
                </select>
            </div>
            <div class="input-field col s4">
                <select ng-model="search.species">
                    <option value="" disabled selected>Species</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
            </div>
            <div class="input-field col s4">
                <select ng-model="search.gender">
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
    </div>
</div>

@stop
