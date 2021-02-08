<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdsRequest;
use App\Models\Ads;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function index(){
        $ads = Ads::all();
        return view('dashboard.ads.index',compact(['ads']));
    }

    public function create(){
        $locations = Location::all();
        return view('dashboard.ads.create',compact(['locations']));
    }

    public function doCreate(AdsRequest $request){
        try{
            DB::beginTransaction();
            $ads = new Ads();
            $filepath = "";
            $ads->title = $request->title;
            $ads->description = $request->description;
            $ads->city_id = $request->city;
            $filepath = saveImage('advertisements', $request->image);
            $ads->image = $filepath;
            $ads->save();
            DB::commit();
            return redirect()->route('admin.advertisement.index')->with(['message'=>'The advertisement created successfully.','status'=>'success']);
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->route('admin.advertisement.index')->with(['message'=>'Error, try again later.','status'=>'error']);
        }
    }
}
