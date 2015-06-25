@extends("layout")

@section("content")
	<div class="route-background">
        <div>  
        	<div class="login-feature">
              	<div id="map"></div>

                <div class="create-trip">
                    <form action="{{ url('/all_trips') }}" method="POST" name="trip-edit"> 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="trip-image-id" class="id">
                        <label>Departure: </label><br>
                        <input type="text" name="lattitude" class="lattitude"><br>
                        <label>Arrival: </label><br>
                        <input type="text" name="longitude" class="longitude"><br>
                        <label>Date: </label><br>
                        <input type="text" name="date" class="date"><br>
                        <label>Description: </label><br>
                        <textarea name="description" class="description" cols="30" rows="5"></textarea><br>
                        <button type="submit" class="edit-image-button">Create Trip</button>
                    </form> 
                </div>

        	</div>
        </div>
	</div>
	
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/javascript/gmaps.js"></script>
    <script src="/javascript/hasmap.js"></script>
@endsection