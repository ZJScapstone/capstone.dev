@extends('layouts.master')
@section('bottom-script')
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
@stop
@section('content')
<div class="container">

    {{ Form::open(array('action' => 'PostsController@store')) }}
    <h4 class="center"> Create A New Post </h4>
    @if(!Confide::user())    
    <p>To submit a post you must first <a href="{{{ action('UsersController@login') }}}">log in</a> or <a href="{{{ action('UsersController@create') }}}">sign up</a>. </p>
    @endif
    @if(Confide::user())
    <div class="row">
        <div class="input-field col s6">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control'] ) }}
        </div>
        <div class="input-field col s6">
            <select name="post_type_id" id="post_type_id">
                    <option value="" disabled selected>Post Type</option>
                @foreach($postTypes as $postType)
                    <option value="{{ $postType->id }}">{{ ucfirst($postType->post_type) }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', null, ['class' => 'form-control, materialize-textarea'] ) }}
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action" id="ft-green">Submit
        <i class="material-icons right">done</i>
    </button>
    <a href="/posts#docs" class="btn waves-effect waves-light" id="ft-green">Cancel
        <i class="material-icons right">close</i>
    </a>

    {{ Form::close() }}
    @endif
</div>
