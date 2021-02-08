<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function index(){
        if(Auth::guard('web')->check())
            $ads = Ads::where('city_id',Auth::user()->city_id)->get();
        else
            $ads=0;
        return view('website.index',compact(['ads']));
    }
}
