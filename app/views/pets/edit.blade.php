@extends('layouts.master')

@section('bottom-script')
<script>
    $('select').material_select();
</script>

<script>
    $('select').each(function(){
        var oldVal = $( '#old-' + $(this).attr('name') ).val();
        $(this).val(oldVal);
    });

    $('select').material_select();

    $('.delete-image').click(function(e){
        e.preventDefault();
        var $form  = $('#delete-image-form');
        var imgId  = $(this).children().first().data('id');
        var action =  $form.attr('action').replace('img_id', imgId);
        if (confirm('Are you sure you want to remove this picture?')) {
            $form.attr('action', action).submit();
        }
    });
</script>
@stop

@section('content')
<div class="container">
@if($errors->all())
    @foreach($errors->all() as $err)
        <p class="error-message">{{ $err }}</p>
    @endforeach
@endif
{{ Form::open( ['action' => ['PetsController@update', $pet->id], 'method' => 'PUT'] ) }}
    {{ Form::token() }}
    <input type="hidden" id="old-status" value="{{ $pet->status }}">
    <input type="hidden" id="old-species_id" value="{{ $pet->species_id }}">
    <input type="hidden" id="old-gender" value="{{ $pet->gender }}">
    <input type="hidden" id="old-age" value="{{ $pet->age }}">
    <input type="hidden" id="old-size_id" value="{{ $pet->size_id }}">
    <h4 class="center"> Edit Your Pet Listing </h4>
    <div class="row">
        <div class="input-field col s4">
            <select id="pet-status" name="status">
                <option value="" disabled selected>Status</option>
                <option value="available">Available</option>
                <option value="inprogress">In Progress</option>
                <option value="adopted">Adopted</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select name="species_id">
                <option value="" disabled selected>Species</option>
                <option value="1">Dog</option>
                <option value="2">Cat</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select name="gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <select name="age">
                <option value="" disabled selected>Age</option>
                <option value="baby">Baby</option>
                <option value="young">Young</option>
                <option value="adult">Adult</option>
                <option value="senior">Senior</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select name="size_id">
                <option value="" disabled selected>Size</option>
                <option value="1">Small</option>
                <option value="2">Medium</option>
                <option value="3">Large</option>
                <option value="4">Xtra Large</option>
            </select>
        </div>
        <div class="input-field col s4">
            <input type="text" id="breed" name="breed" value="{{ $pet->breed }}">
            <label for="breed">Breed</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <input id="pet_name" type="text" name="name" value="{{ $pet->name }}">
            <label for="pet_name">Pet Name</label>
        </div>
        <div class="input-field col s4">
            <input type="text" id="a_num" name="a_num" value="{{ $pet->a_num }}">
            <label for="a_num">Pet ID#</label>
        </div>
        <div class="input-field col s4">
            <input id="pet_color" type="text" name="color" value="{{ $pet->color }}">
            <label for="pet_color">Pet Color</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea placeholder="Tell us about your pet! e.g. are they spayed/ neutered? microchipped? vaccinated?" id="description" class="materialize-textarea" name="description">
                {{ $pet->description }}
            </textarea>
            <label for="description">Pet Description</label>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Submit</button>
    </div>
{{ Form::close() }}
<h4 class="center">Images</h4>
<div class="row">
@foreach($pet->images as $index => $image)
    <div class="col m4">
        <a href="#" class="delete-image">
            <img class="responsive-img" src="{{ $image->img_path }}" alt="pet image {{ $index }}" data-id="{{ $image->id }}">
        </a>
    </div>
    @if(($index + 1) % 3 == 0)
        </div><div class="row">
    @endif
@endforeach
</div>
{{ Form::open( ['action' => ['ImagesController@destroy', 'img_id'], 'method' => 'DELETE', 'id' => 'delete-image-form'] ) }}
{{ Form::close() }}
</div>
@stop