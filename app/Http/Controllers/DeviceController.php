<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Device;
use Session;

class DeviceController extends Controller
{
    public function addDevices(Request $request)
    {
    	$user = Sentinel::findUserByCredentials(['login' => $request->email]);
    	$user = User::find($user->id);
		$count = 0;
    	 	
    	if($request->d1 != "")
    	{
    		$count++;
    		$device = new Device;
			$device->device_id = $request->d1;
            $device->name = $request->d1;
			$user->devices()->save($device);
    	}
    	if($request->d2 != "")
    	{
    		$count++;
    		$device = new Device;
			$device->device_id = $request->d2;
            $device->name = $request->d1;
			$user->devices()->save($device);
    	}
    	if($request->d3 != "")
    	{
    		$count++;
    		$device = new Device;
			$device->device_id = $request->d3;
            $device->name = $request->d1;
			$user->devices()->save($device);
    	}
    	if($request->d4 != "")
    	{
    		$count++;
    		$device = new Device;
			$device->device_id = $request->d4;
            $device->name = $request->d1;
			$user->devices()->save($device);
    	}
    	if($request->d5 != "")
    	{
    		$count++;
    		$device = new Device;
			$device->device_id = $request->d5;
            $device->name = $request->d1;
			$user->devices()->save($device);
    	}

    	$devices = User::find($user->id)->devices()->get();
    	
    	$message = $count." devices added.";
		Session::flash('success', $message);
		
		return back()->withUser($user)->withDevices($devices);
    }

    public function removeDevice(Request $request)
    {
    	Device::find($request->id)->delete();
    	Session::flash('success', "Device removed");
    	return back();
    }

    public function changeName(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'name' => 'required|max:255'
        ]);

        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->save();

        Session::flash('success', 'Name Updated');
        return back();
    }
}
