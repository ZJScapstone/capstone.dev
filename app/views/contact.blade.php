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
                <div class="card-image"><img src="http://placehold.it/400" alt="Jonathan Reyes"></div>
                <div class="card-content">
                    <p class="center">Jonathan Reyes</p>
                </div>
            </div>
        </div>
        <div class="col m4">
            <div class="card hoverable" onclick="$('#sj').openModal()">
                <div class="card-image"><img src="http://placehold.it/400" alt="Sarajane Stevens"></div>
                <div class="card-content">
                    <p class="center">Sarajane Stevens</p>
                </div>
            </div>
        </div>
    </div>
    <p>Check out <a class="deep-orange-text darken-3" href="https://github.com/ZJScapstone">the github repository</a> for this project!</p>
</div>

{{-- modals --}}
<div class="modal bottom-sheet" id="zach">
    <div class="container">
        <h2 class="center">Zach Gulde</h2>
        <div class="row">
            <div class="col m9">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cupiditate at dicta quia dolorem tempore, quaerat repellat sequi cum iste explicabo saepe repudiandae placeat consectetur ipsum, doloribus distinctio aliquid culpa.</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cupiditate at dicta quia dolorem tempore, quaerat repellat sequi cum iste explicabo saepe repudiandae placeat consectetur ipsum, doloribus distinctio aliquid culpa.</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cupiditate at dicta quia dolorem tempore, quaerat repellat sequi cum iste explicabo saepe repudiandae placeat consectetur ipsum, doloribus distinctio aliquid culpa.</p>
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
