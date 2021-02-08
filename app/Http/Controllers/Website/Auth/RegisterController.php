<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        $locations = Location::all();
        return view('auth.register',compact(['locations']));
    }

    public function doRegister(UserRequest $request)
    {
        $customer = new User();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->city_id = $request->city;
        $customer->save();
        return redirect()->route('user.login');
    }
}
