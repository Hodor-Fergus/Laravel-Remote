<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->userType == 0) { //Admin
            $companies = Company::orderBy('id', 'DESC')->get();
        } else {
            $companies = Company::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        }
        return view('companies.index')->with(['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $allowedFileExtension = ['jpeg', 'jpg', 'png'];

        $imageUrls = [];

        if($request->hasFile('images')) {

            $images = $request->images;

            foreach ($images as $image) {
                $extension = $image->extension();
                $name = $name = time().rand(1,50).'.'.$extension;

                if (in_array($extension, $allowedFileExtension)) {
                    $image->storeAs('public', $name); // you can access file publicly using asset('storage/$name')
                    $imageUrls[] = $name;
                }
            }
        }

        Company::create([
            'company_name' => $request->company_name,
            'street' => $request->street,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'total_slots' => $request->total_slots,
            'available_from' => $request->available_from,
            'available_to' => $request->available_to,
            'total_employees' => $request->total_employees,
            'user_id' => Auth::user()->id,
            'images' => json_encode($imageUrls)
        ]);

        return redirect('/companies')->with('success', 'Company Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit')->with(['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        // Delete previous images script
        $previousImagesNameArray = json_decode($company->images, true);

        foreach ($previousImagesNameArray as $imageName) {
            Storage::disk('public')->delete($imageName);
        }

        // Upload new Images script
        $allowedFileExtension = ['jpeg', 'jpg', 'png'];

        $imageUrls = [];

        if($request->hasFile('images')) {

            $images = $request->images;

            foreach ($images as $image) {
                $extension = $image->extension();
                $name = $name = time().rand(1,50).'.'.$extension;

                if (in_array($extension, $allowedFileExtension)) {
                    $image->storeAs('public', $name); // you can access file publicly using asset('storage/$name')
                    $imageUrls[] = $name;
                }
            }
        }

        $company->update([
            'company_name' => $request->company_name,
            'street' => $request->street,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'total_slots' => $request->total_slots,
            'available_from' => $request->available_from,
            'available_to' => $request->available_to,
            'total_employees' => $request->total_employees,
            'images' => json_encode($imageUrls)
        ]);

        return redirect('/companies')->with('success', 'Company Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
