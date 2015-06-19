<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Trip extends Model {

	protected $table = 'trip';

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

}
