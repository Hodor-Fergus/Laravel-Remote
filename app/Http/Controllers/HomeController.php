<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::where('available_from', '<>', null)->where('available_to', '<>', null)->get();
        foreach($companies as $company){
            $company['images'] = json_decode($company['images'], true);
        }
        // dd($companies);
        return view('home')->with(['companies' => $companies]);
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }
}
