<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('head.title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    			<span class="sr-only">Toggle navigation</span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="#">Home</a>
    	</div>
    
    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse navbar-ex1-collapse">
    		<ul class="nav navbar-nav navbar-right">
    			<li><a href="#">Register</a></li>
    			<li><a href="#">Login</a></li>
    			<li><a href="#">Logout</a></li>
    		</ul>
    	</div><!-- /.navbar-collapse -->
    </nav>

<div class="container">
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				  <div class="panel-heading">
						<h3 class="panel-title">@yield('title')</h3>
				  </div>
				  <div class="panel-body">

					  	@if($errors->count())
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Errors!</strong>
								<ul>
									@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
					  	@endif

						@yield('content')
				  </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>