<!DOCTYPE html>
<html>
<head>
	<title>Vedansh</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-lg-8 col-md-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-lg-4 col-md-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>
	<footer id="footer" class="text-center">
		<p>Copyright 2018 &copy; Vedansh Dwivedi &nbsp; <a class="nav-link" href="/message">Messages</a></p>
	</footer>
</body>
</html>