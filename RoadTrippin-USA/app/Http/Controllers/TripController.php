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

}