@extends('layouts.master')
@section('styles')
<link href="{{ asset('admin/vendor/datatables/dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/js/swal/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between my-2">
        <h1 class="h3 text-gray-800">@if (auth()->user()->userType == 1) Your Submitted @else All @endif Requests</h1>
        <a href="{{ route('requests.create') }}" class="btn btn-sm btn-primary">
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
                            <th>Company</th>
                            <th>Submitted By</th>
                            <th>Slots</th>
                            <th>Start</th>
                            <th>End</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($requests); $i++) <tr>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="deleteRequest" data-request-id="{{$requests[$i]->id}}">
                                        <form method="POST" action="{{ route('requests.destroy', $requests[$i]->id)}}">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger deleteButton" hidden data-request-id="{{$requests[$i]->id}}"><i class="fas fa-trash text-white"></i></button>
                                        </form>
                                        <button class="btn btn-danger"><i class="fas fa-trash text-white"></i></button>
                                    </div>
                                </div>
                            </td>
                            <td>{{$requests[$i]->company->company_name}}</td>
                            <td>{{$requests[$i]->user->name}}</td>
                            <td>{{$requests[$i]->number_of_slots_required}}</td>
                            <td>{{$requests[$i]->start_date_time}}</td>
                            <td>{{$requests[$i]->end_date_time}}</td>
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
    $(".deleteRequest").on('click', (e) => {
    let requestId = $(e.currentTarget).data('request-id')
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
            $(".deleteButton[data-request-id=" + requestId + "]").click();
        }
    });
})
</script>
@endsection