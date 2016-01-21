@extends('layouts.master')

@section('title', 'happytails!')

@section('bottom-script')
<script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });

    $(document).ready(function() {
        $('select').material_select();
    });
</script>
@stop

@section('content')
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
    <div class="hero-body">
        <div class="row">
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h1 class="center">View found/ adoptable</h1>
                </div>
            </div>
            <div class="col m4">
                <a href="#pets-create-modal" class="modal-trigger">
                    <div class="card-panel indigo darken-4 white-text hoverable">
                        <h1 class="center">New Post/ Second/ Third</h1>
                    </div>
                </a>
            </div>
            <div class="col m4">
                <div class="card-panel indigo darken-4 white-text hoverable">
                    <h1 class="center">view lost/ Second/ Third</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- pets create form modal --}}

    <div id="pets-create-modal" class="modal">
        @include('pets.create')
    </div>


    <!--Start Animals-->
    <div class="row">
        <div class="col s4">
            <div class="card hoverable">
                <div class="card-image ">
                    <img src="img/cat3.jpg">
                    <span class="card-title">Kit</span>
                </div>
                <div class="card-content">
                    <p>Kit is a terrible cat who bites you.</p>
                </div>
            </div>
        </div>
        <div class="col s4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="img/dog1.jpg">
                    <span class="card-title">Ruby</span>
                </div>
                <div class="card-content">
                    <p>A beautiful, shiny pup.</p>
                </div>
            </div>        
        </div>
        <div class="col s4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="img/cat3.jpg">
                    <span class="card-title">Max</span>
                </div>
                <div class="card-content">
                    <p>This isn't Max, this is kit.</p>
                </div>
            </div>        
        </div>
    </div>
    <!--End Animals-->

@stop
@section('bottom-script')
<script type="text/jquery">
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });

</script>
