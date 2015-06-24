<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Trip;
use App\User;
use App\TripImage;

use DB;

class TripController extends Controller {

	public function viewTrips() {
		$trips = Trip::all();
		return view('all_trips', ['trips' => $trips]);
	}

	public function createTrip() {
		return view('route');
	}

	public function viewGallery($trip_id) {
		$images = TripImage::where('trip_id', '=', $trip_id)->get();
		return view('view_trip', ['images' => $images, 'trip_id' => $trip_id]);
	}

	public function postCreateTrip() {
		// $trip = new Trip();
		// $trip->name = Request::input('name');
		// $trip->date = Request::input('date');
		// $trip->origin_city = Request::input('origin_city');
		// $trip->origin_state = Request::input('origin_state');
		// $trip->destination_state = Request::input('destination_city');
		// $trip->destination_state = Request::input('destination_state');
	}

	public function show($id) {
		//
	}

	public function edit($id) {
		//
	}

	public function update($id) {
		//
	}

	public function delete($id) {
		//
	}

}