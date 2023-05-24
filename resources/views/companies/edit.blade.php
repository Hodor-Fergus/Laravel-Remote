@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div id="pageContent">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4" id="formStepOne">
                    <div class="card-body">
                        <form action="{{ '/companies/'. $company->id}}" method="POST" enctype="multipart/form-data" role="form">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="company_name" name="company_name" placeholder="" required value="{{ $company->company_name}}">
                                    @error('company_name')
                                    <div class="text-danger is-invalid">
                                        Company Name is required
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="street" class="form-label">Street <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="street" name="street" placeholder="" required value="{{ $company->street}}">
                                    @error('street')
                                    <div class="text-danger is-invalid">
                                        Street is required
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="city" name="city" placeholder="" required value="{{ $company->city}}">
                                    @error('city')
                                    <div class="text-danger is-invalid">
                                        City is required
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="postal_code" class="form-label">Postal Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="postal_code" name="postal_code" placeholder="" required value="{{ $company->postal_code}}">
                                    @error('postal_code')
                                    <div class="text-danger is-invalid">
                                        Postal Code is required
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="country" name="country" placeholder="" required value="{{ $company->country}}">
                                    @error('country')
                                    <div class="text-danger is-invalid">
                                        Country is required
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="total_employees" class="form-label">Total Employees <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-user" id="total_employees" name="total_employees" placeholder="" required value="{{ $company->total_employees}}">
                                    @error('total_employees')
                                    <div class="text-danger is-invalid">
                                        Count of Employees is required
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="total_slots" class="form-label">Available Slots<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-user" id="total_slots" name="total_slots" placeholder="" required value="{{ $company->total_slots}}">
                                    @error('total_slots')
                                    <div class="text-danger is-invalid">
                                        Available Slots is required
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="available_from" class="form-label">Available From (Leave Empty if not available right now)</label>
                                    <input type="date" class="form-control form-control-user" id="available_from" name="available_from" placeholder="" value="{{ $company->available_from}}">
                                    @error('available_from')
                                    <div class="text-danger is-invalid">
                                        Something went wrong
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="available_to" class="form-label">Available To (Leave Empty if not available right now)</label>
                                    <input type="date" class="form-control form-control-user" id="available_to" name="available_to" placeholder="" value="{{ $company->available_to}}">
                                    @error('available_to')
                                    <div class="text-danger is-invalid">
                                        Something went wrong
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="images[]" class="custom-file-input" id="images" multiple>
                                            <label class="custom-file-label" for="images">Upload 3 - 5 Images of the space</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary px-5" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection