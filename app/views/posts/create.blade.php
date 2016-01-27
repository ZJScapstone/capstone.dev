@extends('layouts.master')
@section('content')
<form ng-submit="addPost(newPost)">
    <h4 class="center"> Create A New Post </h4>
    @if(!Confide::user())    
    <p>To submit a post you must first <a href="{{{ action('UsersController@login') }}}">log in</a> or <a href="{{{ action('UsersController@create') }}}">sign up</a>. </p>
    @endif
    @if(Confide::user())
    <div class="row">
        <div class="input-field col s6">
            <input id="title" type="text" class="validate" ng-model="newPost.title">
            <label for="title">Title</label>
        </div>
        <div class="input-field col s6">
            <select id="post-type" ng-init-"newPost.post_type=null" ng-model="newPost.post_type">
                <option value="" disabled selected>Post Type</option>
                <option value="doc">Document</option>
                <option value="forum">Forum</option>
                <option value="event">Event</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="body" placeholder="Remember to include dates for events!" class="materialize-textarea" ng-model="newPost.body"></textarea>
            <label for="body">Body</label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="left modal-action modal-close waves-effect waves-light btn">Close</a>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">></i>
        </button>
    </div>
    @endif
</form>
