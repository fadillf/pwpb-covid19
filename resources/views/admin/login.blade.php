@extends('layouts.master-admin')

@section('profile','active')
@section('title')
@section('content') 
	<div class="container-fluid" style="width: 450px;">
		<div class="row">
			<div class="col"><br><br>
				<div class="card mt-5">
    				<div class="card-body">
    					<form method="POST" action="{{ route('login') }}">
							@csrf
    						<p class="text-center mb-4"><img src="{{ URL::asset('/logo.png') }}" width="100" height="100"></p>

    						<div class="input-group mb-4">
							    <div class="input-group-prepend">
							      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user"></i></div>
							    </div>
							    <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Input group example" aria-describedby="btnGroupAddon" value="{{ old('email') }}" required autocomplete="email" autofocus>
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

    						<div class="input-group">
							    <div class="input-group-prepend">
							      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-lock"></i></div>
							    </div>
							    <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Input group example" aria-describedby="btnGroupAddon" required autocomplete="current-password">
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="form-check  mb-4">
							  <input class="form-check-input" value="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							  <label class="form-check-label" for="defaultCheck1" >
								{{ __('Remember Me') }}
							  </label>
							</div>

							<div class="text-center">
								<button type="submit" class="btn btn-danger w-100" onclick="loading()" id="loading">
									{{ __('Login') }}
								</button>

								@if (Route::has('password.request'))
									<a class="btn btn-link mt-3" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
								@endif
							</div>
    					</form>
	    			</div>
				</div>
			</div>
		</div>
	</div>
	<div class="loading">
		
	</div>
@endsection