@extends("layout")

@section("content")
	<div class="route-background">
  	<div>
    	<div id="map"></div>
  		<a class="route-new-trip" href="view_all">Create Trip</a>
  	</div>
	</div>
	
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/javascript/gmaps.js"></script>
    <script src="/javascript/hasmap.js"></script>
@endsection