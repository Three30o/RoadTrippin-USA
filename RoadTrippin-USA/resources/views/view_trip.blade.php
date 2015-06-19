@extends("layout")

@section("content")

	<div class="view-background">
  		<div>
  			<form action="upload" method="POST" enctype="multipart/form-data">
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
			  		<div class="trip-container">
		        		<div class="trip-media trip-media2">
		        			<i class="fa fa-pencil-square-o" title="Edit"></i>
		        			<img src="/uploads/{{ $image['img_path'] }}" alt="" width="100%" height="100%">
		        		</div>
		        			<form action="edit" method="POST" name="trip-edit">	
			        	<div class="trip-hidden-edit">
  								<input type="hidden" name="_token" value="{{ csrf_token() }}">
  								<label>Lattitude: </label><br>
  								<input type="text" name="lattitude"><br>
  								<label>Longitude: </label><br>
  								<input type="text" name="longitude"><br>
  								<label>Date: </label><br>
  								<input type="text" name="date"><br>
  								<label>Description: </label><br>
  								<input type="text-area" name="description"><br>
			        	</div>
			        		</form>	
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
			  	</div>
		  	</form>	
  		</div>
  	</div>

@endsection