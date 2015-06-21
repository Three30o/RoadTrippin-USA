<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Trip;
use App\User;
use App\TripImage;

use Auth;

use Illuminate\Http\Request;

class TripController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function viewTrips() {
		
		$trips = Trip::all();
		return view('all_trips', ['trips' => $trips]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createTrip() {
		// $trip = new Trip();
		return view('route');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreateTrip() {
		// $trip = new Trip();
		// $trip->name = Request::input('name');
		// $trip->date = Request::input('date');
		// $trip->origin_city = Request::input('origin_city');
		// $trip->origin_state = Request::input('origin_state');
		// $trip->destination_state = Request::input('destination_city');
		// $trip->destination_state = Request::input('destination_state');
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
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		//
	}


	public function viewGallery($trip_id) {
		//Fetch data with Model
		$images = TripImage::where('trip_id', '=', $trip_id)->get();

		// print_r($images[0]["img_path"]);

		return view('view_trip', ['images' => $images]);

	}

}