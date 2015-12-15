<!DOCTYPE html>
<html>
	<head>
  		<meta charset="UTF-8">
  		<link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>
  		<title>title</title>
 	</head>
 	<body>
	  	<div class="container">
		  	<nav class="navbar navbar-default">
		  		<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					  	</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  	<ul class="nav navbar-nav">
					  		<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					  	</ul>
					  	<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
						  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
						  		<ul class="dropdown-menu">
									@if (Auth::check())
									<li><a href="/auth/logout">Logout</a></li>
									@else
									<li><a href="/auth/login">Login</a></li>
									<li><a href="/auth/register">Register</a></li>
									@endif
						  		</ul>
							</li>
							@if(Auth::check())
							@if(Auth::user()->can('admin'))
							<li class="dropdown">
						  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
						  		<ul class="dropdown-menu">
									<li><a href="/admin/users">Users</a></li>
						  		</ul>
							</li>
							@endif
							@endif
					  	</ul>
				   	</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<div class="flash-message">
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has('alert-' . $msg))
						<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} 
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						</p>
					@endif
				@endforeach
			</div> <!-- end .flash-message -->
			
			@yield('content')
		
		</div><!-- /.container -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	  	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
 	</body>
</html>
