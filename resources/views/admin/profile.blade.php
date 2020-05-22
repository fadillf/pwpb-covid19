@extends('layouts.master-admin')

@section('profile','active')
@section('title')
@section('content')          	

    <div class="container">
		@if(session('success'))
              <div class="alert alert-success">
                  {{session('success')}}
              </div>
          @endif
          @if(session('error'))
              <div class="alert alert-error">
                  {{session('error')}}
              </div>
        @endif
      <h2>Profile Account</h2>
    	<div class="row">
    		<div class="col-sm-12">
    			<div class="card pb-2">
    				<div class="card-header bg-danger text-white">Edit Profile</div>
    				<div class="card-body">
    					<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
							@method('patch')
							@csrf
    						<div class="form-grup">
    							<label>Name</label>
    							<input type="text" name="name" class="form-control" placeholder="Admin PCI" value="{{ $user->name }}">
    						</div><br>

    						<div class="form-grup">
    							<label>Email</label>
    							<input type="email" name="" class="form-control" placeholder="Admin@gmail.com" value="{{ $user->email }}" disabled>
    						</div><br>

							<div class="form-grup mb-3">
    							<label>Gambar</label><br>
								@if(!empty($user->gambar))
									<img id="output" src="{{ asset('/uploads/profile/' . @$user->gambar)}}" width="200px" height="240px" style="object-fit: cover;"/>
								@endif
    						</div>

							<div class="input-group mb-3 " style="width:20%;" >
								<div class="custom-file">
									<input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01" accept="image/*" onchange="loadFile(event)" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>

							<div class="card-footer bg-transparent border-white">
    							<input type="submit" name="" class="btn btn-success float-right" value="Save" style="width:17%;">
    						</div>
						</form>
    				</div>
    				
    					
    			</div>

				<h2 class="mt-4">Security Account</h2>
				<div class="card pb-2">
    				<div class="card-header bg-danger text-white">Change Password</div>
    				<div class="card-body">
    					<form method="POST" action="{{ route('change.password') }}">
							@csrf 
							@foreach ($errors->all() as $error)
								<p class="text-danger">{{ $error }}</p>
							@endforeach 

							<div class="form-grup">
    							<label>Current Password</label>
    							<input type="password" id="password" name="current_password" class="form-control" autocomplete="current-password" placeholder="Current Password" value="">
    						</div><br>
    						<div class="form-grup">
    							<label>New Password</label>
    							<input type="password" id="new_password" name="new_password" class="form-control" autocomplete="current-password" placeholder="New Password" value="">
    						</div><br>
    						<div class="form-grup">
    							<label>New Confirm Password</label>
    							<input type="password" id="new_confirm_password" name="new_confirm_password" autocomplete="current-password" class="form-control" placeholder="Confirm Password">
    						</div>
    				</div>
    				<div class="card-footer bg-transparent border-white">
    					<input type="submit" name="" class="btn btn-success float-right" value="Update Password" style="width:17%;">
    				</div>
    					</form>
    			</div>

    		</div>
    	</div>
    </div>
	<script>
		var loadFile = function(event) {
			var output = document.getElementById('output');
			output.src = URL.createObjectURL(event.target.files[0]);
			output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
			}
		};
	</script>
@endsection