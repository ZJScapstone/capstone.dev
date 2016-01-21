@extends('layouts.master')

@section('title', 'Create A New Listing')

@section('content')
    <div class="container">
        <div class="row">
            <form>
                <h4 class="center">Create A Shelter!</h4>
                <div class="input-field col s6">
                    <input type="text" id="name">
                    <label for="name">Shelter Name</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="location">
                    <label for="location">Location</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="url">
                    <label for="url">Website</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="phone">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea"></textarea>
                    <label for="description">Tell us about your shelter:</label>
                </div>
                <div class="input-field file-field col s12">
                    <div class="btn">
                        <span>Shelter Picture</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload a picture">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
            
