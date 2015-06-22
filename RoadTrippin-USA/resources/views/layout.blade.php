<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RoadTrippin' USA</title>
	<link href='http://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="/javascript/main.js"></script>
	<script>var _token = '{{ csrf_token() }}'</script>
</head>
<body>

	<div class="header">
	    <header>
	      	<nav>

	      		@if (!Auth::check())
		        <div class="nav-logo">
		        	<a href="/welcome"><img src="/images/tire_logo.jpg" height="100%" width="100%" alt=""></a>
		        </div>
		        @else
		        <div class="nav-logo">
		        	<a href="/home"><img src="/images/tire_logo.jpg" heigh="100%" width="100%" alt=""></a>
		        </div>
		        @endif

		        @if (!Auth::check())

		        @else
		        <a class="nav-route" href="/route">Plan Route</a>
		        <a class="nav-trips" href="/all_trips">My Trips</a>
		        @endif

		        @if (!Auth::check())
		        <div><a class="welcome-nav-signup" href="/auth/register">Sign Up</a></div>
		        @else
		        <div class="user-profile">
			        <img src="/images/scott.jpg" alt="">
			        <div>
			          	<a href="/user">Account</a>
			          	<a href="/auth/logout">Logout</a>
			        </div>
		      	</div>
		      	@endif

	      	</nav>		
	    </header>
    </div>
	
	@yield("content")
	
	<div class="footer">
		<footer>
			<div>
				<p><span>Powered by </span>PoopPals.com</p>
			</div>
			<div class="social-media">
				<a href="#"><i class="fa fa-twitter-square"></i></a>
				<a href="#"><i class="fa fa-facebook-official"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-tumblr-square"></i></a>
			</div>
		</footer>
	</div>

</body>
</html>