<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Trip;


class TripImage extends Model {

	protected $table = 'trip_image';

	protected $fillable = ['trip_id', 'img_path', 'description', 'date', 'lattitude', 'longitude'];

	public function trip() {
		return $this->belongsTo("App\Trip", 'trip_id');
	}

	// public static function getByTripId($tripId){
		
	// }

}
