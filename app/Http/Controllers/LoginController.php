<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Login;
use Sentinel;

class LoginController extends Controller
{
    public function login(Request $request)
	{
		$this->validate($request,[
			'email' => 'required|max:255|exists:users,email',
            'password' => 'required|max:255'
        ]);
        	
		$credentials = [
			'email' => $request->email,
			'password' => $request->password,
		];

		if (Sentinel::authenticate($credentials, false))
			return redirect('dashboard');
	}

	public function logout()
	{
		Sentinel::logout();
		return redirect('/');
	}
}
