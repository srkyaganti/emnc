<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ForgotPassword;
use Sentinel;
use Activation;
use Reminder;
use Session;
use DB;
use Mail;

class PasswordResetController extends Controller
{
    public function getReset($code)
    {
        if (!$this->validatePasswordResetCode($code)) {
            $errors = collect()->push('Invalid or expired password reset code; please request a new link.');
            return redirect('/')->withInput()->with('errors', $errors);
        }
        return view('forgotpassword.resetpassword')->with('code', $code);
    }

    public function postReset(Request $request,$code)
    {
        $this->validate($request,[
            'password' => 'required|max:255|confirmed'
        ]);
        
        $user = Sentinel::findUserByCredentials(['email' => $request->email]);
        $password = $request->password;

        if ($reminder = Reminder::complete($user, $code, $password))
        {
            Session::flash('success', 'Password Reset Successful');
            
            Reminder::removeExpired();
            
            return redirect('/');
        
        }
        else
        {
            Session::flash('success', 'Password Reset Unsuccessful');
            return back()->withInput();
        }
    }

    public function getRequest()
    {
        return view('forgotpassword.forgotpassword');
    }

    public function postRequest(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255|exists:users,email',
        ]);
        $user = Sentinel::findUserByCredentials(['email' => $request->get('email')]);
        
        if ($user) 
        {
            $reminder = Reminder::create($user);
            $code = $reminder->code;
            
            Mail::to($user)->send(new ForgotPassword($code));

            $message = 'An Email has been sent to your Email address';
            Session::flash('success', $message);
            return redirect('/password/reset');
        }        
    }

    protected function validatePasswordResetCode($code)
    {
        return DB::table('reminders')
                ->where('code', $code)
                ->where('completed', false)->count() > 0;
    }
}
