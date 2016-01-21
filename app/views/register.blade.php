@extends('layouts.master')

@section('title', 'Register for Happy Tails')

@section('content')
	<div class="container">
		<div class="row">
    		<form class="col s12">
    			<h4 class="center"> Register to post pets </h4>
      			<div class="row">
        			<div class="input-field col s6">
          				<input id="first_name" type="text" class="validate">
          				<label for="first_name">First Name</label>
        			</div>
        			<div class="input-field col s6">
          				<input id="last_name" type="text" class="validate">
          				<label for="last_name">Last Name</label>
        			</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s12">
          				<input id="email" type="email" class="validate">
          				<label for="email">Email</label>
        			</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s6">
          				<input id="password" type="password" class="validate">
          				<label for="password">Password</label>
        			</div>
        			<div class="input-field col s6">
          				<input id="confirm_password" type="password" class="validate">
          				<label for="confirm_password"> Confirm Password</label>
        			</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s6">
          				<input id="phone_number" type="text" class="validate">
          				<label for="phone_number">Phone Number</label>
        			</div>
        			<div class="input-field col s6">
          				<input id="shelter_name" type="text" class="validate">
          				<label for="shelter_name">Associated Shelter</label>
        			</div>
      			</div>
	      		<div class="row">
	        		<div class="input-field col s12">
	          			<textarea id="description" class="materialize-textarea"></textarea>
	          			<label for="description">About You</label>
	        		</div>
	      		</div>
      			<div class="file-field input-field">
      				<div class="btn">
        				<span>Profile Picture</span>
        				<input type="file">
      				</div>
      				<div class="file-path-wrapper">
        				<input class="file-path validate" type="text" placeholder="Upload a picture">
      				</div>
    			</div>
    			<button class="btn waves-effect waves-light" type="submit" name="action">Register Me!
  				</button>
    		</form>
  		</div>
	</div>