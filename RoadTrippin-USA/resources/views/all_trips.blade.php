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
		  		
			</div>
  		</div>
  	</div>
@endsection