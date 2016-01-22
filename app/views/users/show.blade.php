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
            <p>Email: {{{ $user->email }}}</p>
        </div>
        <div class="col l4">
            @if($user->img_path)
                <img src="{{ $user->img_path }}" alt="" class="materialboxed">
            @else
                <img style="max-width: 100%;height: auto;" src="http://placehold.it/600" alt="" class="materialboxed">
            @endif
        </div>
    </div>
    </div>
@stop