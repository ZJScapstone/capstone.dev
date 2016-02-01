@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script src="/js/side_nav.js"></script>
    <script>
        // navlink fix
        $('#pet-home').click(function(e){
            e.preventDefault();
            window.location = $(this).attr('href');
        });
    </script>
@stop

@section('content')
    <header>
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="/#main" id="pet-home">Pets</a></li>
                    <li class="tab col s3"><a href="#docs">Docs</a></li>
                    <li class="tab col s3"><a href="#forums">Forum</a></li>
                    <li class="tab col s3"><a href="#events">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="fixed-action-btn" id="icon">
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="container" id="docs">
            @include('partials.docs_nav')
            @foreach($docs as $doc)
                <div class="section blog-post">
                    <div class="card-panel">
                        <a href="/posts/{{ $doc->slug_title }}"><h4>{{ $doc->title }}</h4></a>
                        <p class="truncate">{{ $doc->body }}</p>
                        <br>
                        <div class="chip">
                            <i class="material-icons">schedule</i>
                            Update at: {{ $doc->updated_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            @endforeach
        </div>
        <div class="container" id="forums">
            @include('partials.forums_nav')
            @foreach($forums as $forum)
            <div class="section blog-post">
                <div class="card-panel">
                    <a href="/posts/{{ $forum->slug_title }}"><h4>{{ $forum->title }}</h4></a>
                    <p class="truncate">{{ $forum->body }}</p>
                    <br>
                    <div class="chip">
                        <i class="material-icons">schedule</i>
                        Update at: {{ $forum->updated_at->diffForHumans() }}
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            @endforeach
        </div>
        <div class="container" id="events">
            @include('partials.events_nav')
            @foreach($events as $event)
                <div class="section blog-post">
                    <div class="card-panel">
                        <a href="/posts/{{ $event->slug_title }}"><h4>{{ $event->title }}</h4></a>
                        <p class="truncate">{{ $event->body }}</p>
                        <br>
                        <div class="chip">
                            <i class="material-icons">schedule</i>
                            Update at: {{ $event->updated_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            @endforeach
        </div>
    </main>
@stop