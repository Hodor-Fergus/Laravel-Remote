@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div id="pageContent">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4" id="formStepOne">
                    <div class="card-body">
                        <form action="{{ '/locations/'. $location->id}}" method="POST" enctype="multipart/form-data">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="street" class="form-label">Street <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="street" name="street" placeholder="" required value="{{ $location->street }}">
                                    @error('street')
                                    <div class="text-danger is-invalid">
                                        Street is required
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="city" name="city" placeholder="" required value="{{ $location->city }}">
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
                                    <input type="text" class="form-control form-control-user" id="postal_code" name="postal_code" placeholder="" required value="{{ $location->postal_code }}">
                                    @error('postal_code')
                                    <div class="text-danger is-invalid">
                                        Postal Code is required
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" id="country" name="country" placeholder="" required value="{{ $location->country }}">
                                    @error('country')
                                    <div class="text-danger is-invalid">
                                        Country is required
                                    </div>
                                    @enderror
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