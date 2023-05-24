<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    //
    public function index(){
        if(Auth::user()->userType == 0){
            $companies = Company::where('available_from', '<>', null)->where('available_to', '<>', null)->select('id', 'company_name', 'available_from', 'available_to')->get();
        }else{
            $companies = Company::where('user_id', Auth::user()->id)->where('available_from', '<>', null)->where('available_to', '<>', null)->select('id', 'company_name', 'available_from', 'available_to')->get();
        }
        return view('calendar')->with(['companies' => json_encode($companies)]);
    }
}
