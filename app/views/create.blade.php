@extends('layouts.master')

@section('title', 'Create A New Listing')

@section('content')
	<div class="container">
	  	<div class="row">
	    	<form class="col s12">
	    		<h4 class="center"> Create A New Pet Listing </h4>
	    		<div class="row">
					<div class="input-field col s4">
	    				<select>
			    			<option value="" disabled selected>Please Select One</option>
			    			<option value="1">Lost</option>
			    			<option value="2">Found</option>
			    			<option value="3">Adoptable</option>
	    				</select>
	    				<label>Status</label>
	  				</div>
	  				<div class="input-field col s4">
	    				<select>
			    			<option value="" disabled selected>Please Select One</option>
			    			<option value="1">Dog</option>
			    			<option value="2">Cat</option>
			    			<option value="3">Other</option>
	    				</select>
	    				<label>Species</label>
	  				</div>
	  				<div class="input-field col s4">
	    				<select>
			    			<option value="" disabled selected>Please Select One</option>
			    			<option value="1">Dog</option>
			    			<option value="2">Cat</option>
			    			<option value="3">Other</option>
	    				</select>
	    				<label>Breed</label>
	  				</div>
				</div>
	    		<div class="row">
					<div class="input-field col s4">
	    				<select>
			    			<option value="" disabled selected>Please Select One</option>
			    			<option value="1">SAPA</option>
			    			<option value="2">Purrfect Haven</option>
			    			<option value="3">ACS</option>
	    				</select>
	    				<label>Shelter</label>
	  				</div>
	  				<div class="input-field col s4">
	    				<select>
			    			<option value="" disabled selected>Please Select One</option>
			    			<option value="1">Baby</option>
			    			<option value="2">Young</option>
			    			<option value="3">Adult</option>
			    			<option value="4">Senior</option>
	    				</select>
	    				<label>Age</label>
	  				</div>
	  				<div class="input-field col s4">
	    				<select>
			    			<option value="" disabled selected>Please Select One</option>
			    			<option value="1">Male</option>
			    			<option value="2">Female</option>
			    			<option value="3">Unknown</option>
	    				</select>
	    				<label>Gender</label>
	  				</div>
				</div>
	      		<div class="row">
	        		<div class="input-field col s6">
	          			<input  id="pet_name" type="text" class="validate">
	          			<label for="pet_name">Pet Name</label>
	        		</div>
	        		<div class="input-field col s6">
	          			<input id="pet_color" type="text" class="validate">
	          			<label for="pet_color">Pet Color</label>
	        		</div>
	      		</div>
	      		<div class="row">
	        		<div class="input-field col s12">
	          			<textarea placeholder="Tell us about this friend" id="description" class="materialize-textarea"></textarea>
	          			<label for="description">Pet Description</label>
	        		</div>
	      		</div>
	      		<div class="file-field input-field">
      				<div class="btn">
        				<span>Images</span>
        				<input type="file" multiple>
      				</div>
      				<div class="file-path-wrapper">
        				<input class="file-path validate" type="text" placeholder="Upload one or more images of your pet">
      				</div>
    			</div>
    			<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    				<i class="material-icons right">></i>
  				</button>
	    	</form>
	  	</div>
	</div>

<script type="text/jquery">
	$(document).ready(function() {
	    $('select').material_select();
	});
</script>
            

