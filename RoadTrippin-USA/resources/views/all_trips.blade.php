@extends("layout")

@section("content")
	<div class="view-background">
  		<div>
			<div class="login-feature">
				@foreach($trips as $trip)
	  			<div class="view-container">
		  			<div class="view-media" style="background-image: url('/uploads/{{ $trip->firstImage() }}')"></div>
		  			<div class="view-description">
		  				<div>
		  					<a class="view-location" href="/trip/{{$trip->trip_id}}/gallery">{{ $trip->name }}</a>
		  				</div>
		  				<div class="view-date">{{ $trip->date }}</div>
		  				<p>{{ $trip->description }}</p>
		  			</div>
		  		</div>
				@endforeach
		  		{{-- <div class="view-container">
		  			<div class="view-media"></div>
		  			<div class="view-description">
		  				<div><a class="view-location" href="view_trip">Omaha, NE - Portland, OR</a></div>
		  				<div class="view-date">July 30th, 2014 - August 3rd, 2014</div>
		  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		  					Cumque odit asperiores, distinctio, magni quis doloribus molestiae. 
		  				</p>
		  			</div>
		  		</div> --}}	
		  		{{-- <div class="view-container">
		  			<div class="view-media"></div>
		  			<div class="view-description">
		  				<div><a class="view-location" href="view_trip">Jacksonville, NC - Omaha, NE</a></div>
		  				<div class="view-date">Jan 25th, 2014 - Jan 29th, 2014</div>
		  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		  					Cumque odit asperiores, distinctio, magni quis doloribus molestiae. 
		  				</p>
		  			</div>
		  		</div> --}}
			</div>
  		</div>
  	</div>
@endsection