@extends('layouts.master-admin')

@section('profile','active')
@section('title')
@section('content') 
	<div class="container-fluid" style="width: 450px;">
		<div class="row">
			<div class="col">
				<div class="card">
    				<div class="card-body">
    					<form>
    						<p class="text-center mb-4"><img src="{{ URL::asset('/logo.png') }}" width="100" height="100"></p>
    						<div class="input-group mb-4">
							    <div class="input-group-prepend">
							      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user"></i></div>
							    </div>
							    <input type="text" class="form-control" placeholder="Username" aria-label="Input group example" aria-describedby="btnGroupAddon">
							</div>
    						<div class="input-group">
							    <div class="input-group-prepend">
							      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-lock"></i></div>
							    </div>
							    <input type="text" class="form-control" placeholder="Password" aria-label="Input group example" aria-describedby="btnGroupAddon">
							</div>
							<div class="form-check  mb-4">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    Remember Me
							  </label>
							</div>
    						<button class="btn btn-success w-100">Login</button>
    					</form>
    					<hr>
    					<a href="" class="btn btn-primary w-100 mb-3">Register</a>
	    			</div>
				</div>
			</div>
		</div>
	</div>
@endsection