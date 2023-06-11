<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Location;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        if(Auth::user()->userType == 1){
            $companiesCount = Company::where('user_id', Auth::user()->id)->count();
            $availableSlots = Company::where('user_id', Auth::user()->id)->where('available_from', '<>', null)->where('available_to', '<>', null)->select('total_slots')->sum('total_slots');
            $requestCount = Request::where('user_id', Auth::user()->id)->count();
            $userCount = User::count();
            $locations = Location::where('user_id', Auth::user()->id)->get();
        }else{
            $companiesCount = Company::count();
            $availableSlots = Company::where('available_from', '<>', null)->where('available_to', '<>', null)->select('total_slots')->sum('total_slots');
            $requestCount = Request::count();
            $userCount = User::count();
            $locations = Location::all();
        }
        return view('dashboard')->with([
            'companiesCount' => $companiesCount, 
            'requestCount' => $requestCount,
            'userCount' => $userCount,
            'availableSlots' => $availableSlots,
            'locations' => $locations
        ]);
    }
}
