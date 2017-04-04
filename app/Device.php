<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'devices';

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
