@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/side_nav.css">
@stop

@section('bottom-script')
    <script src="/js/styleFixes.js"></script>
    <script src="/js/side_nav.js"></script>
@stop

@section('content')
@if($post->postType->post_type == 'doc')
    <header>
        @include('partials.docs_nav')
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="/">Pets</a></li>
                    <li class="tab col s3"><a class="active" href="#">Docs</a></li>
                    <li class="tab col s3"><a href="/forums">Forum</a></li>
                    <li class="tab col s3"><a href="/events">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="section">
                <h5>{{{ $post->title }}}</h5>
                <p>{{{ $post->body }}}</p>
                <div class="divider"></div>
                <div id="disqus_thread"></div>
                <script>

                    var disqus_config = function () {
                        posts.show = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                        var d = document, s = d.createElement('script');

                        s.src = '//sahappytails.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
        </div>
    </main>
    {{-- circle icons --}}
    <div id="icon-menu">
        <a class="tooltipped btn-floating btn-large deep-orange darken-3" data-position="left" data-tooltip="Menu">
            <i class="material-icons">menu</i>
        </a>
        <ul>
            <li>
                <a class="tooltipped btn-floating red modal-trigger" data-position="left" data-tooltip="New Pet" href="#pets-create-modal" ng-click="verifyUser()">
                    <i class="material-icons">mode_edit</i>
                </a>
            </li>
            <li>
                <a class="tooltipped btn-floating green" data-position="left" data-tooltip="Advanced Search" onclick="$('#search-modal').openModal()">
                    <i class="material-icons">search</i>
                </a>
            </li>
        </ul>
    </div>
@elseif($post->postType->post_type == 'forum')
    <header>
        @include('partials.forums_nav')
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="/">Pets</a></li>
                    <li class="tab col s3"><a href="#">Docs</a></li>
                    <li class="tab col s3"><a class="active" href="/forums">Forum</a></li>
                    <li class="tab col s3"><a href="/events">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="section">
                <h5>{{{ $post->title }}}</h5>
                <p>{{{ $post->body }}}</p>
                <div class="divider"></div>
                <div id="disqus_thread"></div>
                <script>

                    var disqus_config = function () {
                        posts.show = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                        var d = document, s = d.createElement('script');

                        s.src = '//sahappytails.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
        </div>
    </main>
@elseif($post->postType->post_type == 'event')
    <header>
        @include('partials.events_nav')
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="/">Pets</a></li>
                    <li class="tab col s3"><a href="/docs">Docs</a></li>
                    <li class="tab col s3"><a href="/forums">Forum</a></li>
                    <li class="tab col s3"><a class="active" href="/events">Events</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="section">
                <h5>{{{ $post->title }}}</h5>
                <p>{{{ $post->body }}}</p>
                <div class="divider"></div>
                <div id="disqus_thread"></div>
                <script>

                    var disqus_config = function () {
                        posts.show = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                        var d = document, s = d.createElement('script');

                        s.src = '//sahappytails.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
        </div>
    </main>
@endif
@stop

