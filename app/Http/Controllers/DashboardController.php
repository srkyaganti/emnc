<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;

class DashboardController extends Controller
{
    public function home()
    {
    	return view('dashboard.home');
    }

    public function profile()
    {
    	$user = Sentinel::getUser();
		return view('dashboard.profile')->with('user',$user);
    }

    public function updateProfile(Request $request)
    {
    	$this->validate($request, [
	        'name' => 'required|max:255',
	        'mobile' => 'required|digits:10',
	        'address' => 'required|max:500'
	    ]);

		$user = Sentinel::getUser();

	    $credentials = [
	    	'organization' => $request->name,
	    	'mobile' => $request->mobile,
	    	'address' => $request->address
		];

		$user = Sentinel::update($user, $credentials);
		
		Session::flash('success', 'Profile Updated!');

		return redirect('profile');
    }

    public function updatePassword(Request $request)
    {
    	$this->validate($request, [
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        
        $user = Sentinel::check();
        $email = $user->email;
        $credentials = [
            'email' => $user->email,
            'password' => $request->old_password,
        ];

        if (Sentinel::validateCredentials($user, $credentials)) {
            Sentinel::update($user, ['password' => $request->password]);
            Session::flash('success', 'Password Updated!');
            return redirect('profile');
        }
        else {
            $errors = collect();
            $errors->push("You entered an incorrect password!");
            return back()->withInput()->with('errors', $errors);
        }
    }
}
