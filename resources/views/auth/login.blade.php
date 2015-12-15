<!-- resources/views/auth/login.blade.php -->
@extends('app')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-3">
	</div>
	<div class="col-xs-12 col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3> Login </h3>
			</div>
			<div class="panel-body">
				<form method="POST" action="/auth/login">
					{!! csrf_field() !!}
		
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" value="{{ old('username') }}" class="form-control">
					</div>
		
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
		
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember Me</label>
					</div>
		
					<button type="submit" class="btn btn-default">Login</button>
					<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
				</form>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3">
	</div>
</div>
@stop
