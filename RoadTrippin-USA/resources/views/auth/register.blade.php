@extends('layout')

@section('content')
	<div class="login-background">
		<div>
			<div class="login-feature">
				<div class="lightbox">
					<span class="title title-signup">Sign Up</span>

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					{{-- FORM TO REGISTER NEW USER --}}
					<form role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="lightbox-login">
							<div>
							<label>First Name:</label>
								<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
							</div>
						</div>
						<div class="lightbox-login">
							<div>
							<label>Last Name:</label>
								<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
							</div>
						</div>
						<div class="lightbox-login">
							<div>
							<label>Username:</label>
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
							</div>
						</div>
						<div class="lightbox-login">
							<div>
							<label>E-Mail Address:</label>
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>
						<div class="lightbox-login">
							<div>
							<label>Password:</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="lightbox-login">
							<div>
							<label>Confirm Password:</label>
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
						<div class="login">
	                    	<button type="submit" class="lightbox-login-button">Sign Up</button>
						</div>

					</form>
				
				</div>
			</div>
		</div>
	</div>
@endsection
