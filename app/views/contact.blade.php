@extends('layouts.master')

@section('title', 'Contact Us')

@section('top-script')
<style>
    p > a{
        color: inherit;
    }
</style>
@stop

@section('content')

{{-- main --}}
<div class="container">
    <h1 class="center">Contact Us</h1>
    <div class="row">
        <div class="col m4">
            <div class="card hoverable" onclick="$('#zach').openModal()">
                <div class="card-image"><img src="/img/zach.jpg" alt="Zach Gulde"></div>
                <div class="card-content">
                    <p class="center">Zach Gulde</p>
                </div>
            </div>
        </div>
        <div class="col m4">
            <div class="card hoverable" onclick="$('#jonathan').openModal()">
                <div class="card-image"><img src="/img/jonathan.jpg" alt="Jonathan Reyes"></div>
                <div class="card-content">
                    <p class="center">Jonathan Reyes</p>
                </div>
            </div>
        </div>
        <div class="col m4">
            <div class="card hoverable" onclick="$('#sj').openModal()">
                <div class="card-image"><img src="/img/sj.png" alt="Sarajane Stevens"></div>
                <div class="card-content">
                    <p class="center">Sarajane Stevens</p>
                </div>
            </div>
        </div>
    </div>
    <p>Check out <a class="deep-orange-text darken-3" href="https://github.com/ZJScapstone/capstone.dev">the github repository</a> for this project!</p>
</div>

{{-- modals --}}
<div class="modal bottom-sheet" id="zach">
    <div class="container">
        <h2 class="center">Zach Gulde</h2>
        <div class="row">
            <div class="col m9">
                <p>Zach is a recent Codeup graduate who hopes to transition into a career in software devolpment. He comes from a customer service background and hopes to use the skills gained from 10+ years of experience to excel in his new career. Zach enjoys spending time with his family, playing the guitar, and like his teammates, lots of pet puns.</p>
            </div>
            <div class="col m3">
                <p class="deep-orange-text darken-3 right">
                    <a href="mailto:zachgulde@gmail.com"><i class="material-icons">email</i></a>
                    <a href="http://zgulde.com"><i class="material-icons">language</i></a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal bottom-sheet" id="jonathan">
    <div class="container">
        <h2 class="center">Jonathan Reyes</h2>
        <div class="row">
            <div class="col m9">
                <p>A recent Codeup graduate making the transition in a coding career. With over 15 years of customer service experience, he brings a dedicated passion to everything he does. With a love for learning, he stays challenged keeping up with his two boys and furthering his knowledge of code.</p>
            </div>
            <div class="col m3">
                <p class="deep-orange-text darken-3 right">
                    <a href="mailto:jreyes.satx@gmail.com"><i class="material-icons">email</i></a>
                    <a href="http://jonathanreyes.net/"><i class="material-icons">language</i></a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal bottom-sheet" id="sj">
    <div class="container">
        <h2 class="center">Sarajane Stevens</h2>
        <div class="row">
            <div class="col m9">
                <p>An avid animal lover, Sarajane hopes to use technology to help the community around her grow to be one that includes its weakest members, rather than cast them aside. She loves rescuing animals, spending time with her family, and creating things online. </p>
            </div>
            <div class="col m3">
                <p class="deep-orange-text darken-3 right">
                    <a href="mailto:sjmrstevens@gmail.com"><i class="material-icons">email</i></a>
                    <a href="http://sarajane.xyz/"><i class="material-icons">language</i></a>
                </p>
            </div>
        </div>
    </div>
</div>
@stop

