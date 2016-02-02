@extends('layouts.master')

@section('title', 'pet')

@section('content')
<div class="container">
    <h2 class="center">{{{ $pet->name }}}</h2>
    @if(Confide::user() && ($pet->user_id == Confide::user()->id))
        <a href="{{ action('PetsController@edit', $pet->id) }}" class="btn red">Edit This Pet</a>
    @endif
    <div class="row">
        <div class="col m6">
            <p>posted by <a href="/users/{{ $pet->user_id }}">{{ $pet->user->username }}</a></p>
            <p><strong>Status:</strong> <em>{{ $pet->status }}</em></p>
            <p><strong>ID#:</strong>{{ $pet->a_num }}</p>
        </div>
        <div class="col m6">
            <p><strong>Species:</strong>{{ $pet->species->species }}</p>
            <p><strong>Gender:</strong>{{{ $pet->gender }}}</p>
            <p><strong>Breed:</strong>{{{ $pet->breed }}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col m12">
            <p>{{{ $pet->description }}}</p>
        </div>
    </div>
    <div class="row">
        @foreach($pet->images as $img)
            <div class="col m6">
                <img class="responsive-img" src="/{{{ $img->img_path }}}">
            </div>
        @endforeach
    </div>
</div>
@stop