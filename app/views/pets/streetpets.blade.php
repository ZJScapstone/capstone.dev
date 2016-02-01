@extends('layouts.master')

@section('bottom-script')
<script>

    $(document).ready(function(){
      $('.slider').slider({full_width: true, interval: 4000});
    });
</script>
@stop
@section('content')
<div class="container">

	<div class="slider fullscreen">
	    <ul class="slides">
	      <li>
	        <img src="img/streetpets/saddogs.png"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/browndog.jpg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/pico.jpg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/piper.jpg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/skinny.jpg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/streetdogs.jpg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/sparky.jpeg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/paxie.jpeg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/juvenile.jpeg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/mama.jpeg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/blue.jpeg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/brownpup.jpeg"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/penny.jpeg"> <!-- random image -->
	      </li>	      
	    </ul>
  	</div>
</div>
