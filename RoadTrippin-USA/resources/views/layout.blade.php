<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RoadTrippin' USA</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300|Syncopate:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="/javascript/main.js"></script>
	<script>var _token = '{{ csrf_token() }}'</script>
</head>
<body>
	
	    <header>
	      	<div>

	      		@if (!Auth::check())
		        <div class="nav-logo">
		        	<div><a href="/home"><i class="fa fa-road"></i>RoadTrippin'</a></div>
		        </div>
		        @else
		        <div class="nav-logo">
		        	<div><a href="/home"><i class="fa fa-road"></i>RoadTrippin'</a></div>
		        </div>
		        @endif
				<div>

		        @if (!Auth::check())

		        @else
		        <a class="nav-route" href="/route">Plan Route</a>
		        <a class="nav-trips" href="/all_trips">My Trips</a>
		        @endif

		        @if (!Auth::check())
		        <div><a class="login-nav-signup" href="/auth/register">Sign Up</a></div>
		        @else
		        <div class="user-profile">

                    <img src="/images/scott.jpg" alt="">
                    

			        <div>
			          	<a href="/user">Account</a>
			          	<a href="/auth/logout">Logout</a>
			        </div>
		      	</div>
		      	@endif

	      	</div>		
	    </header>

	
	@yield("content")
	
	<footer>
		<div class="footer">
			<div class="social-media">
				<div>Follow Us</div>
				<a href="#"><i class="fa fa-twitter-square"></i></a>
				<a href="#"><i class="fa fa-facebook-official"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-tumblr-square"></i></a>
			</div>
		</div>
	</footer>
</body>
</html>