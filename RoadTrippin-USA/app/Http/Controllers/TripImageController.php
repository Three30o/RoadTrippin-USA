<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Trip;
use App\TripImage;
use Input;
use Request;
// use Illuminate\Http\Request;

class TripImageController extends Controller {

	public function addImage($trip_id) {

		// Check if image file is a actual image or fake image
	    $target_dir = "../public/uploads";
	    $target_file = $target_dir .'/'. basename($_FILES["fileToUpload"]["name"]);

	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	    if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";

	        // Save filename to database
	        // basename($_FILES["fileToUpload"]["name"])

	        // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        // } else {
	            // echo "Sorry, there was an error uploading your file.";
	        // }

	        // Add trip_image record to database
	        $trip_img = new TripImage();
	        $trip_img->img_path = basename($_FILES["fileToUpload"]["name"]);
	        $trip_img->trip_id = $trip_id;
	        $trip_img->save();
	        
	        $uploadOk = 1;
	   	} else {
	        // echo "File is not an image.";
	        $uploadOk = 0;
	    }

		// $images = TripImage::where('trip_id', '=', 1)->get();
		// return view('view_trip', ['images' => $images]);
		return redirect('trip/' . $trip_id . '/gallery');
	}

	public function delete($id) {
		$tripImage = TripImage::find($id);
		$tripImage->delete();
		return ['success' => true];
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editImage($trip_id) {
		$trip_image_id = new TripImage();
		// $trip_image_id->trip_image_id = Request::input('trip-image-id');
		$trip_image_id->lattitude = Input::get('lattitude');
		$trip_image_id->longitude = Input::get('longitude');
		$trip_image_id->date = Input::get('date');
		$trip_image_id->description = Input::get('description');
		$trip_image_id->save();
		return redirect('trip/' . $trip_id . '/gallery');
		// dd($trip_image_id);


// dd(Request::all());
// 		return 'Hello ' . $trip_image_id;

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		//
	}

}