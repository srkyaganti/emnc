<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Activation;
use Sentinel;
use Mail;
use Session;
use App\Mail\NewUser;

class RegistrationController extends Controller
{
    public function createUser(Request $request)
    {
    	$this->validate($request, [
	        'email' => 'required|max:255|unique:users,email',
	    ]);

    	$credentials = [
			'email' => $request->email,
			'password' => str_random(rand(20, 100)),
		];

		$user = Sentinel::register($credentials);
		$role = Sentinel::findRoleBySlug('user');
		$user->roles()->attach($role);
		$user->save();

		$code = Activation::create($user)->code;

		Mail::to($user)->send(new NewUser($user->email, $code));

		Session::flash('success', 'Invitation sent!');
		return redirect('dashboard');

    }

    public function activateUser($email, $code)
	{
		
		$user = Sentinel::findByCredentials(['login' => $email]);
		if (Activation::complete($user, $code))
		{
			if(Sentinel::guest())
				Sentinel::login($user);
			return view('pages.update')->with('email',$email);
		}
		else
		{
			return abort(403, 'Oops! You are not allowed to come here!');
		}
	}

	public function registrationComplete(Request $request)
	{
		$this->validate($request, [
	        'password' => 'required|max:255|confirmed',
	        'name' => 'required|max:255',
	        'mobile' => 'required|digits:10',
	        'address' => 'required|max:500'
	    ]);

		$user = Sentinel::findByCredentials(['login' => $request->email]);
	    
	    $credentials = [
	    	'password' => $request->password,
	    	'organization' => $request->name,
	    	'mobile' => $request->mobile,
	    	'address' => $request->address
		];


		$user = Sentinel::update($user, $credentials);
		
		return redirect('dashboard');
	}
}
