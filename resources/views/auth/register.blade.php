<!-- resources/views/auth/register.blade.php -->

@extends('app')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-3">
	</div>
	<div class="col-xs-12 col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3> Register </h3>
			</div>
			<div class="panel-body">
		
				<form method="POST" action="/auth/register" role="form">
					{!! csrf_field() !!}
		
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" value="{{ old('username') }}" class="form-control">
					</div>
		
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" value="{{ old('email') }}" class="form-control">
					</div>
		
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
		
					<div class="form-group">
						<label for="password_confirmation">Confirm Password</label>
						<input type="password" name="password_confirmation" class="form-control">
					</div>
		
					<div class="form-group">
						<button type="submit" class="btn btn-default">Register</button>
					</div>
				</form>
			</div>
		</div>
	<div class="col-xs-12 col-sm-3">
	</div>
</div>
@stop
