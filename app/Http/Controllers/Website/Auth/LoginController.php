<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('web')->attempt(['email' => $request->input("email"),'password' => $request->input("password")], $remember_me)) {
            return redirect() -> route('website.home');
        }
        return redirect()->back()->with(['error'=>'Try another email or password.']);
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('website.home');
    }

}
