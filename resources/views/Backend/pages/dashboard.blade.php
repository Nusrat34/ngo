@extends('backend.master')


@section('content')


<div class="container-fluid">
    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="color: blue;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Donation</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$donationTable}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total scholarship</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$scholarship}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>




@endsection