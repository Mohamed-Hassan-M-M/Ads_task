<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $ads = Location::all();
        return view('dashboard.location.index',compact(['ads']));
    }

    public function doCreate(LocationRequest $request){
        try{
            $location = new Location();
            $location->city = $request->city;
            $location->save();
            return redirect()->route('admin.location.index')->with(['message'=>'The advertisement created successfully.','status'=>'success']);
        }catch(\Exception $e){
            return redirect()->route('admin.location.index')->with(['message'=>'Error, try again later.','status'=>'error']);
        }
    }
}
