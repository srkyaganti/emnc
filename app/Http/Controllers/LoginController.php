<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login(Request $request)
	{
		$credentials = [
			'email' => $request->email,
			'password' => $request->password,
		];

		if (Sentinel::authenticate($credentials,false))
			return redirect('dashboard');

		$errors = collect()->push('Email and password do not match!');
        return back()->withInput()->with('errors', $errors);
	}

	public function logout()
	{
		Sentinel::logout();
		return redirect('/');
	}

	public function logoutAll()
	{
		Sentinel::logout(null,true);
		return redirect('/');
	}
}
