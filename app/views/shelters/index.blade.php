@extends('layouts.master')

@section('content')

    <div class="container">
        <h2 class="center">Shelters</h2>
        <div class="row">
        @foreach($shelters as $index => $shelter)

            {{-- shelter card --}}
            <div class="col m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $shelter->img_path }}" alt="">
                    </div>
                    <div class="card-content">
                        <h4 class="center">{{{ $shelter->name }}}</h4>
                        <p>
                            <span class="left">{{{ $shelter->location }}}</span>
                            <span class="right">{{{ $shelter->phone }}}</span>
                        </p>
                        <div class="row"></div> {{--clearfix--}}
                        <p>{{{ $shelter->description }}}</p>
                    </div>
                </div>
            </div>
            {{-- end shelter card --}}

            @if(($index + 1) % 3 == 0 && ($index + 1) != count($shelters))
                </div>
                <div class="row">
            @endif

        @endforeach
        </div>
    </div>

@stop