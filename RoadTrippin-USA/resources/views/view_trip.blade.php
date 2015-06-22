@extends("layout")

@section("content")

	<div class="view-background">
  		<div>

  			<form action="addImage" method="POST" enctype="multipart/form-data">
  				<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
	  			<div class="wrapper">
		  			<div class="trip-container">
		        		<div class="trip-media trip-media1">
		        			<p>Add Image</p>
		        			<div>
	  							<input type="file" name="fileToUpload">
	  							<button type="submit" action="trip/{trip_id}/gallery">Submit</button>
	  						</div>	
		        		</div>	
		  			</div>
		  			
		  			@foreach($images as $image)
			  		<div class="trip-container" data-id="{{ $image->trip_image_id }}">
		        		<div class="trip-media trip-media2">
		        			<i class="fa fa-pencil-square-o edit-image" title="Edit"></i>
		        			<i class="fa fa-trash delete-image" title="Delete"></i>
		        			<img src="/uploads/{{ $image->img_path }}" alt="" width="100%" height="100%">
		        		</div>
		  			</div>
		  			@endforeach

		  			<div class="trip-container">
		        		<div class="trip-media trip-media3">

		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
			  		<div class="trip-container">
		        		<div class="trip-media trip-media4">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>	
		  			<div class="trip-container">
		        		<div class="trip-media trip-media5">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
			  		<div class="trip-container">
		        		<div class="trip-media trip-media6">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
		  			<div class="trip-container">
		        		<div class="trip-media trip-media7">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
			  		<div class="trip-container">
		        		<div class="trip-media trip-media8">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>	
		  			<div class="trip-container">
		        		<div class="trip-media trip-media9">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>
		  			</div>
			  		<div class="trip-container">
		        		<div class="trip-media trip-media10">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
		  			<div class="trip-container">
		        		<div class="trip-media trip-media11">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
		  			<div class="trip-container">
		        		<div class="trip-media trip-media11">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
		  			<div class="trip-container">
		        		<div class="trip-media trip-media11">
		        			<img src="" alt="" width="100%" height="100%">
		        		</div>	
		  			</div>
			  	</div>
		  	</form>

  		</div>
  	</div>


  	<div class="trip-edit">
		<form action="/trip/{{$trip_id}}/editImage" method="POST" name="trip-edit">	
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="trip-id" value="{{ $trip_id }}">
			<input type="hidden" name="trip-image-id" class="id">
			<label>Lattitude: </label><br>
			<input type="text" name="lattitude" value="{{ old('lattitude') }}"><br>
			<label>Longitude: </label><br>
			<input type="text" name="longitude" value="{{ old('longitude') }}"><br>
			<label>Date: </label><br>
			<input type="text" name="date" value="{{ old('date') }}"><br>
			<label>Description: </label><br>
			<textarea name="description" cols="30" rows="5">{{ old('description') }}</textarea><br>
			<button type="submit" class="edit-image-button">Save</button>
			<i class="fa fa-times close" title="Close"></i>
		</form>	
	</div>

@endsection