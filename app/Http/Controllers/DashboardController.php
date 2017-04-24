<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use Roles;
use Activation;
use App\User;

class DashboardController extends Controller
{
    public function home()
    {
        if(Sentinel::inRole('admin'))
        {   
            $roles = Roles::all()->where('slug','user')->first();
            $users = $roles->getUsers();
            return view('dashboard.home', compact('users'));
        }
        else
        {
            //$data = 
            $user = Sentinel::check();
            $devices = User::find($user->id)->devices()->get();
            return view('dashboard.home', compact('devices'));    
        }
    	
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

    public function viewProfile($email)
    {
        $user = Sentinel::findByCredentials(['login' => $email]);
        $devices = User::find($user->id)->devices()->get();
        return view('dashboard.admin.viewprofile',compact(['user','devices']));
    }

    public function getStatistics()
    {
        return view('dashboard.statistics');
    }

    public function postStatistics(Request $request)
    {
        $this->validate($request, [
            'daterange' => 'required|min:41|max:41',
        ]); 
        return response()->json([
            'field' => $request->_token,
            'content' => $request->daterange
        ]);
    }   
}