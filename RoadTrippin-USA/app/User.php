<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'user';
	protected $primaryKey = 'user_id';

	protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password'];
	protected $hidden = ['password', 'remember_token'];

	public function trip() {
		return $this->hasMany("App\Models\Trip", 'user_id');
	}

}
