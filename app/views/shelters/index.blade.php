@extends('layouts.master')

@section('bottom-script')
<script>
    $(document).ready(function(){
        $('.modal-trigger').leanModal();
    });
</script>
@stop

@section('content')

    <div class="container">
        <h2 class="center">Shelters</h2>
        <div class="row">
        @foreach($shelters as $index => $shelter)
            {{-- shelter card --}}
            <div class="col m4">
                <a href="#shelter{{$index}}" class="modal-trigger">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $shelter->img_path }}" alt="">
                    </div>
                    <div class="card-content">
                        <h4 class="center">{{{ $shelter->name }}}</h4>
                    </div>
                </div>
                </a>
            </div>
            {{-- end shelter card --}}

            {{-- individual shelter modal --}}
            <div class="modal bottom-sheet" id="shelter{{$index}}">
                @include('shelters.show')
            </div>


            @if(($index + 1) % 3 == 0 && ($index + 1) != count($shelters))
                </div>
                <div class="row">
            @endif

        @endforeach
        </div>
    </div>

@stop