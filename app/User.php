<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sentinel;

class User extends Model
{
     protected $table = 'users';


	public function devices()
	{
		return $this->hasMany('App\Device', 'user_id');
	}
}
