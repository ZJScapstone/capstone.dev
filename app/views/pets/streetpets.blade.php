@extends('layouts.master')

@section('bottom-script')
<script>

    $(document).ready(function(){
      $('.slider').slider({full_width: true, interval: 6000});
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
	        <img src="img/streetpets/sad2.png"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/sad3.png"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/sad4.png"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/sad5.png"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/sad6.png"> <!-- random image -->
	      </li>
	      <li>
	        <img src="img/streetpets/sad7.png"> <!-- random image -->
	      </li>
	    </ul>
  	</div>
</div>
