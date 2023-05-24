@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div id="pageContent">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4" id="formStepOne">
                    <div class="card-body">
                        <form action="/requests" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="company_id" class="form-label">Company <span class="text-danger">*</span></label>
                                    <select class="form-control form-select" id="company_id" name="company_id">
                                        <option value="" selected>Select Company from List</option>
                                        @for ($i = 0; $i < count($companies); $i++)
                                            <option value="{{$companies[$i]->id}}">{{$companies[$i]->company_name}}</option>
                                        @endfor
                                    </select>
                                    @error('company_id')
                                    <div class="text-danger is-invalid">
                                        Company is required
                                    </div>
                                    @enderror
                                    
                                </div>
                                <div class="col-6">
                                    <label for="number_of_slots_required" class="form-label">Slots Required <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-user" id="number_of_slots_required" name="number_of_slots_required" required>
                                    @error('number_of_slots_required')
                                    <div class="text-danger is-invalid">
                                        Slots is required
                                    </div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="start_date_time" class="form-label">Starting Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control form-control-user" id="start_date_time" name="start_date_time" placeholder="" required>
                                    @error('start_date_time')
                                    <div class="text-danger is-invalid">
                                        Starting Date is required
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="end_date_time" class="form-label">Ending Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control form-control-user" id="end_date_time" name="end_date_time" placeholder="" required>
                                    @error('end_date_time')
                                    <div class="text-danger is-invalid">
                                        Ending Date is required
                                    </div>
                                    @enderror
                                </div>
                            </div>


                            {{-- <div class="form-group row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="images" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="images" name="images">Upload 3 - 5 Images of the space</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}



                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary px-5" type="submit">
                                    Create
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