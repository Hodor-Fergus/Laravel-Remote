@extends('layouts.master')

@section('styles')
<link href="{{ asset('admin/vendor/datatables/dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/js/swal/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{auth()->user()->name}} DASHBOARD</h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Companies</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$companiesCount}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$requestCount}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(auth()->user()->userType == 0)
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$userCount}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Available Slots</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$availableSlots}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Dear {{auth()->user()->name}}, your office location is</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($locations); $i++) <tr>
                        <td class="text-center d-flex flex-grow-1 justify-content-center">
                            <div class="d-flex ">
                                <div class="deleteLocation" data-location-id="{{$locations[$i]->id}}">
                                    <form method="POST" action="{{ route('locations.destroy', $locations[$i]->id)}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger deleteButton" hidden data-location-id="{{$locations[$i]->id}}"><i class="fas fa-trash text-white"></i></button>
                                    </form>
                                    <button class="btn btn-danger"><i class="fas fa-trash text-white"></i></button>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('locations.edit', $locations[$i]->id)}}" class="btn btn-primary"><i class="fas fa-pencil-alt text-white"></i></a>
                            </div>
                        </td>
                        <td>{{$locations[$i]->street}}</td>
                        <td>{{$locations[$i]->city}}</td>
                        <td>{{$locations[$i]->postal_code}}</td>
                        <td>{{$locations[$i]->country}}</td>
                        </tr>
                        @endfor
                </tbody>
            </table>
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
    $(".deleteLocation").on('click', (e) => {
        let locationId = $(e.currentTarget).data('location-id')
        console.log(locationId);
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
                $(".deleteButton[data-location-id=" + locationId + "]").click();
            }
            Swal.close();
        });
    })
</script>
@endsection