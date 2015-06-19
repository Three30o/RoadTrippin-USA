<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TripImageController extends Controller {

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
	public function edit($id)
	{
		//
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

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function addImage() {

		////
		// Check if image file is a actual image or fake image
	    $target_dir = "/uploads";
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	    print_r($check);

	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";

	        // Save filename to db
	        // basename($_FILES["fileToUpload"]["name"])

	        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        } else {
	            echo "Sorry, there was an error uploading your file.";
	        }

	        // add trip_image record to db
	        $trip_img->img_path = Request::input('img_path');
	        $trip_img->description = Request::input('description');
	        $trip_img->date = Request::input('date');
	        $trip_img->lattitude = Request::input('lattitude');
	        $trip_img->longitude = Request::input('date');
	        $trip_img->save();
	        return redirect('view_trip');


	        $uploadOk = 1;
	   	} else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

		$images = TripImage::where('trip_id', '=', 1)->get();
		return view('view_trip', ['images' => $images]);

	}

}

}
