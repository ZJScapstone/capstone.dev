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
                    <img style="max-width: 200px;height: 200px;"src="{{ $user->img_path }}" alt="" class="materialboxed">
                @else
                    <img style="max-width: 200px;height: 200px;" src="/img/praykitten.png" alt="" class="materialboxed">
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
            @foreach( $pets as $pet)
            <div class="col m4">
                <div class="card hoverable">
                    <div class="card-image ">
                        <img src="http://placehold.it/400">
                        <span class="card-title">{{{ $pet->name }}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{{ $pet->status }}}</p>
                        <p>{{{ $pet->description }}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@stop