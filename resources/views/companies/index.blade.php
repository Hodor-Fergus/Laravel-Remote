@extends('layouts.master')
@section('styles')
<link href="{{ asset('admin/vendor/datatables/dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/js/swal/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between my-2">
        <h1 class="h3 text-gray-800">Companies</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-sm btn-primary">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Street</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Total Employees</th>
                            <th>Available Slots</th>
                            <th>Available From</th>
                            <th>Available To</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($companies); $i++) <tr>
                            <td class="text-center">
                                <div class="d-flex justify-content-around">
                                    <div class="deleteCompany" data-company-id="{{$companies[$i]->id}}">
                                        <form method="POST" action="{{ route('companies.destroy', $companies[$i]->id)}}">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger deleteButton" hidden data-company-id="{{$companies[$i]->id}}"><i class="fas fa-trash text-white"></i></button>
                                        </form>
                                        <button class="btn btn-danger"><i class="fas fa-trash text-white"></i></button>
                                    </div>
                                    <div>
                                        <a href="{{route('companies.edit', $companies[$i]->id)}}" class="btn btn-primary"><i class="fas fa-pencil-alt text-white"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td>{{$companies[$i]->company_name}}</td>
                            <td>{{$companies[$i]->street}}</td>
                            <td>{{$companies[$i]->city}}</td>
                            <td>{{$companies[$i]->postal_code}}</td>
                            <td>{{$companies[$i]->country}}</td>
                            <td>{{$companies[$i]->total_employees}}</td>
                            <td>{{$companies[$i]->total_slots}}</td>
                            <td>{{$companies[$i]->available_from ?? 'Not Available'}}</td>
                            <td>{{$companies[$i]->available_to ?? 'Not Available'}}</td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('admin/vendor/datatables/dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/swal/sweetalert2.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
<script>
    $(".deleteCompany").on('click', (e) => {
    let companyId = $(e.currentTarget).data('company-id')
    Swal.fire({ 
        title: "Are you sure?", 
        text: "You won't be able to revert this!", 
        icon: "warning", 
        showCancelButton: !0, 
        confirmButtonColor: "#1cbb8c", 
        cancelButtonColor: "#ff3d60", 
        confirmButtonText: "Yes, delete it!" 
    }).then(function (t) {
        if(t.value){
            $(".deleteButton[data-company-id=" + companyId + "]").click();
        }
    });
})
</script>
@endsection