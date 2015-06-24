<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Trip extends Model {

	protected $table = 'trip';
	protected $primaryKey = 'trip_id';

	protected $fillable = [
							'user_id', 
							'name', 
							'date', 
							'description',
							'origin_city', 
							'origin_state', 
							'destination_city', 
							'destination_state'
						  ];

	public function user() {
		return $this->belongsTo("App\User", 'user_id');
	}

	public function tripImages() {
		return $this->hasMany("App\TripImage");
	}

	public function firstImage() {
		$images = $this->tripImages;
		if (count($images) == 0) {
			return "Add Image";
		}
		return $images[0]->img_path;
	}

}
