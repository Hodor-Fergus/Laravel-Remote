<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestRequest;
use App\Http\Requests\UpdateRequestRequest;
use App\Models\Company;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->userType == 0){ //Admin
            $requests = Request::with('company:id,company_name', 'user:id,name')->orderBy('id', 'DESC')->get();
        }else{
            $requests = Request::where('user_id', Auth::user()->id)->with('company:id,company_name', 'user:id,name')->orderBy('id', 'DESC')->get();
        }
        return view('requests.index')->with(['requests' => $requests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::select('id', 'company_name')->get();
        return view('requests.create')->with(['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestRequest $request)
    {
        Request::create([
            'company_id' => $request->company_id,
            'user_id' => Auth::user()->id,
            'request_type' => 0,
            'number_of_slots_required' => $request->number_of_slots_required,
            'start_date_time' => $request->start_date_time,
            'end_date_time' => $request->end_date_time,
        ]);
        return redirect('/requests')->with('success', 'Company Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function edit(Request $request)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestRequest  $request
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateRequestRequest $request, Request $request)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->delete();
        return redirect()->route('requests.index');
    }
}
