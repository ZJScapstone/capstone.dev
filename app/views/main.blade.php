@extends('layouts.master')

@section('title', 'happytails!')

@section('bottom-script')
<script>
    $(document).ready(function() {
        $('.modal-trigger').leanModal();
    });

    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function() {
        var options = [{
            selector: '#test_toggle',
            offset: 300,
            callback: 'Materialize.fadeInImage("#test_toggle")'
        }];
        Materialize.scrollFire(options);
    });

</script>
<script src="/js/styleFixes.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="/js/app.js"></script>
@stop

@section('content')
<div ng-app="petsApp" ng-controller="PetsController as ctrl">

    {{-- hero area --}}
    <div id="overlay">
        <div class="hero-title z-depth-1">
            <h1 class="white-text left-align">happy tails!</h1>
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

    {{-- circle icons --}}
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

    {{-- search --}}
    <div class="container filters">
        <input type="text" ng-model="search">
    </div>

    {{-- pets index --}}
    @include('pets.index')

    {{-- pets create form modal --}}
    <div id="pets-create-modal" class="modal">
        @include('pets.create')
    </div>

    {{-- individual animal modal --}}
    <div class="modal" id="show-pet-modal">
        @include('pets.show')
    </div>

</div>

@stop
