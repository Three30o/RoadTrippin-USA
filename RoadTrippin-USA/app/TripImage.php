<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Trip;


class TripImage extends Model {

	protected $table = 'trip_image';
	protected $primaryKey = 'trip_image_id';

	protected $fillable = ['trip_id', 'img_path', 'lattitude', 'longitude', 'date', 'description'];

	public function trip() {
		return $this->belongsTo("App\Trip", 'trip_id');
	}

}
