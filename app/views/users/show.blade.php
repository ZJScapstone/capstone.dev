@extends('layouts.master')

@section('bottom-script')
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
</script>
@stop

@section('content')

    <div class="container">
    <div class="row">
        <div class="col l6">

            @if($user->img_path)
                <img style="max-width: 300px;height: 300px;"src="{{ $user->img_path }}" alt="" class="materialboxed">
            @else
                <img style="max-width: 100%;height: auto;" src="http://placehold.it/600" alt="" class="materialboxed">
            @endif
        </div>
        <div class="col l6">
            <h4>About {{{ $user->first_name }}}</h4>
            <p> {{{ $user->description }}} </p>
            <h5> Contact </h5>
            <p>Email: {{{ $user->email }}} </p>
        </div>
    </div>
    <div class="row">
        <h4> My Pets </h4>
        <div class="col m4" ng-repeat="pet in pets | filter:user_id">
            <div class="card hoverable" ng-click="openPetModal(pet.id)">
                <div class="card-image ">
                    <img src="http://placehold.it/400">
                    <span class="card-title"><% pet.name %></span>
                </div>
                <div class="card-content">
                    <p><% pet.status %></p>
                    <p><% pet.description %></p>
                </div>
            </div>
        </div>
    </div>

    </div>
@stop