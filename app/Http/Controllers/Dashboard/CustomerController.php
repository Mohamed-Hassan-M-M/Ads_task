<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class CustomerController extends Controller
{
    public function index(){
        $customers = User::all();
        return view('dashboard.customer.index',compact(['customers']));
    }
}
