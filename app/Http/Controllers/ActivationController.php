<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activateUser($email,$code)
    {
    	$user = Sentinel::findByCredentials(['login' => $email]);
		
		if (
			Activation::complete($user, $code) || 
			Hash::check($code, session()->pull('docket_key'))
			)
		{
			if(Sentinel::guest())
				Sentinel::login($user);
			
			session()->put('docket_key', Hash::make($code));
			return view('registration.update');
		}

		else
		{
			return abort(403, 'Oops! You are not allowed to come here!');
		}
    }
}
