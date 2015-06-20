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
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/javascript/gmaps.js"></script>
	<script src="/javascript/main.js"></script>
	<script>var _token = '{{ csrf_token() }}'</script>
</head>
<body>

	<div class="header">
	    <header>
	      <nav>
	        <div><a class="nav-logo" href="#">RoadTrippin'</a></div>
	        <a class="nav-route" href="/route">Plan Route</a>
	        <a class="nav-trips" href="/view_all_trips">My Trips</a>
	        <div class="user-profile">
		        <img src="/images/scott.jpg" alt="">
		        <div>
		          	<a href="#">Account</a>
		          	<a href="/auth/logout">Logout</a>
		        </div>
	      	</div>
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