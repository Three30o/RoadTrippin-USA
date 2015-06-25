<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Trip;
use App\TripImage;
use Input;
use Request;

class TripImageController extends Controller {

	public function addImage($trip_id) {

		// CHECK IF IMAGE FILE IS AN ACTUAL IMAGE OR FAKE IMAGE
	    $target_dir = "../public/uploads";
	    $target_file = $target_dir .'/'. basename($_FILES["fileToUpload"]["name"]);

	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	    if($check !== false) {
	        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

	        // ADD TRIP_IMAGE RECORD TO DATABASE
	        $trip_img = new TripImage();
	        $trip_img->img_path = basename($_FILES["fileToUpload"]["name"]);
	        $trip_img->trip_id = $trip_id;
	        $trip_img->save();
	        
	        $uploadOk = 1;
	   	} else {
	        $uploadOk = 0;
	    }

		return redirect('trip/' . $trip_id . '/gallery');
	}

	//EDIT AND SAVE INFORMATION ABOUT AN IMAGE
	public function editImage($trip_id) {
		$trip_image = TripImage::find($trip_id);
		$trip_image->lattitude = Input::get('lattitude');
		$trip_image->longitude = Input::get('longitude');
		$trip_image->date = Input::get('date');
		$trip_image->description = Input::get('description');
		$trip_image->save();
		return redirect('trip/' . $trip_id . '/gallery');
	}

	//DELETE IMAGES
	public function delete($id) {
		$tripImage = TripImage::find($id);
		$tripImage->delete();
		return ['success' => true];
	}

}