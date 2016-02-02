@extends('layouts.master')

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script>
//        $(document).ready( function() {
//            $('select').each(function() {
//                var oldVal = $( '#old-' + $(this).attr('name') ).val();
//                $(this).val(oldVal);
//            });
//        });
        var oldValue = $('#old-post-type').val();
        $('select#post-type').val(oldValue);

        $('select').material_select();
    </script>
@stop

@section('content')
    <div class="container">

        {{ Form::open( ['action' => ['PostsController@update', $post->id], 'method' => 'PUT'] ) }}
        <h4 class="center"> Edit this Post </h4>
        @if(!Confide::user())
            <p>To submit a post you must first <a href="{{{ action('UsersController@login') }}}">log in</a> or <a href="{{{ action('UsersController@create') }}}">sign up</a>. </p>
        @endif
        @if(Confide::user())
            <input type="hidden" id="old-post-type" value="{{ $post->post_type->post_type }}">
            <div class="row">
                <div class="input-field col s6">
                    {{ Form::label('title', 'Title', ['class' => 'active']) }}
                    {{ Form::text('title', $post->title, ['class' => 'form-control'] ) }}
                </div>
                <div class="input-field col s6">
                    <select name="post_type_id" id="post-type">
                        <option value="" disabled selected>{{ $post->post_type->post_type }}</option>
                        @foreach($postTypes as $postType)
                            <option value="{{ $postType->id }}">{{ ucfirst($postType->post_type) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::label('body', 'Body') }}
                    <textarea name="body" class="form-control, materialize-textarea">
                        {{ $post->body }}
                    </textarea>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action" id="ft-green">Submit
                <i class="material-icons right">></i>
            </button>
            <a href="/posts#docs" class="btn waves-effect waves-light" id="ft-green">Cancel
                <i class="material-icons right">close</i>
            </a>
    {{ Form::close() }}
    @endif
    </div>
@stop