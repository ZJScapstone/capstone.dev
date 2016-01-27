@extends('layouts.master')

@section('title', 'happy tails! - Forums')

@section('top-script')
    <style>
        header, main, footer {
            padding-left: 240px;
        }

        li.search .search-wrapper i.material-icons {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
@stop

@section('bottom-script')

@stop

@section('content')
    <header>
        <div class="row z-depth-0 section fixed">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#">Pets</a></li>
                    <li class="tab col s3"><a href="#">Docs</a></li>
                    <li class="tab col s3"><a class="active" href="#">Forum</a></li>
                    <li class="tab col s3"><a href="#">Events</a></li>
                </ul>
            </div>
        </div>
        @include('partials.side_nav')
    </header>
    <main>
        <div class="container">
            <h2>Post Title</h2>
            <h6>by username</h6>
            <p> Pets stuff pets stuff Pets stuff pets stuff Pets stuff pets stuff Pets stuff pets stuff</p>
            <p>dog dog dog woof woof woof dog dog dog meow meow meow cat cat cat</p>

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