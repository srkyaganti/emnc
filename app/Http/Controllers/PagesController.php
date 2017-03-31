<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Sentinel;
use Activation;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.index');
    }
}
