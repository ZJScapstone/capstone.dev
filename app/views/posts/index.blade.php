@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script src="/js/side_nav.js"></script>
    <script>

    </script>
@stop

@section('content')
    <header>
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="/">Pets</a></li>
                    <li class="tab col s3"><a href="#docs">Docs</a></li>
                    <li class="tab col s3"><a href="#forums">Forum</a></li>
                    <li class="tab col s3"><a href="#events">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container" id="docs">
            @include('partials.docs_nav')
            @foreach($docs as $doc)
                <div class="section blog-post">
                    <div class="card-panel">
                        <a href="/posts/{{ $doc->slug_title }}"><h4>{{ $doc->title }}</h4></a>
                        <div class="chip">
                            <img src="http://placehold.it/50" alt="Foster">
                            {{ $doc->user->first_name }}
                        </div>
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
                    <a href="/post/{{ $forum->slug_title }}"><h4>{{ $forum->title }}</h4></a>
                    <div class="chip">
                        <img src="http://placehold.it/50" alt="Foster">
                        {{ $forum->user->first_name }}
                    </div>
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
                        <a href="/post/{{ $event->slug_title }}"><h4>{{ $event->title }}</h4></a>
                        <div class="chip">
                            <img src="http://placehold.it/50" alt="Foster">
                            {{ $event->user->first_name }}
                        </div>
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