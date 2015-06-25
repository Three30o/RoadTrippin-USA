@extends("layout")

@section("content")
	<div class="view-background">
  		<div>
  			<div class="login-feature">
	  			<form action="addImage" method="POST" enctype="multipart/form-data">
	  				<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
		  			<div class="wrapper">
			  			
			  			{{-- TILE THAT POPULATES WITH NEW IMAGE ADDED --}}
			  			@foreach($images as $image)
				  		<div class="trip-container" data-id="{{ $image->trip_image_id }}" data-lattitude="{{ $image->lattitude }}" data-longitude="{{ $image->longitude }}" data-date="{{ $image->date }}" data-description="{{ $image->description }}">
			        		<div class="trip-media trip-media2">
			        			<i class="fa fa-pencil-square-o edit-image" title="Edit"></i>
			        			<i class="fa fa-trash delete-image" title="Delete"></i>
			        			<img src="/uploads/{{ $image->img_path }}" alt="" width="100%" height="100%">
			        		</div>
			  			</div>
			  			@endforeach
						
						{{-- TILE WITH IMAGE UPLOAD FUNCTIONALITY --}}
			  			<div class="trip-container">
			        		<div class="trip-media trip-media1">
			        			<div>
		  							<input type="file" name="fileToUpload">
		  							<button type="submit" action="trip/{trip_id}/gallery" class="lightbox-login-button">
		  								Save Image
		  							</button>
		  						</div>	
			        		</div>	
			  			</div>
				  	</div>
			  	</form>
			</div>  	
  		</div>
  	</div>

	{{--  FORM TO EDIT TRIP --}}
  	<div class="trip-edit">
		<form action="/trip/{{$trip_id}}/editImage" method="POST" name="trip-edit">	
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="trip-id" value="{{ $trip_id }}">
			<input type="hidden" name="trip-image-id" class="id">
			<label>Latitude: </label><br>
			<input type="text" name="lattitude" class="lattitude"><br>
			<label>Longitude: </label><br>
			<input type="text" name="longitude" class="longitude"><br>
			<label>Date: </label><br>
			<input type="text" name="date" class="date"><br>
			<label>Description: </label><br>
			<textarea name="description" class="description" cols="30" rows="5"></textarea><br>
			<button type="submit" class="edit-image-button">Save</button>
			<i class="fa fa-times close" title="Close"></i>
		</form>	
	</div>
@endsection