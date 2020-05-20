@extends('layouts.master-admin')

@section('profile','active')
@section('title')
@section('content')          	

    <div class="container-fluid">
      <h2>Profile {{ Auth::user()->name }}</h2>
    	<div class="row">
    		<div class="col-sm-12">
    			<div class="card">
    				<div class="card-header bg-danger text-white">Edit Profile</div>
    				<div class="card-body">
    					<form>
    						<div class="form-grup">
    							<label>Name</label>
    							<input type="text" name="" class="form-control" placeholder="Admin PCI" value="{{ Auth::user()->name }}">
    						</div>
    						<div class="form-grup">
    							<label>Email</label>
    							<input type="email" name="" class="form-control" placeholder="Admin@gmail.com" value="{{ Auth::user()->email }}">
    						</div>
    						<div class="form-grup">
    							<label>Password</label>
    							<input type="password" name="" class="form-control" placeholder="********" value="{{ Auth::user()->password }}">
    						</div>
    						<div class="form-grup">
    							<label>Confirm Password</label>
    							<input type="password" name="" class="form-control" placeholder="********">
    						</div>
    				</div>
    				<div class="card-footer bg-transparent border-white">
    					<input type="button" name="" class="btn btn-success" value="Save">
    				</div>
    					</form>
    			</div>
    		</div>
    	</div>
    </div>
@endsection