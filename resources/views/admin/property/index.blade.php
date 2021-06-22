@extends('layouts.admin.app')

@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="float-left m-0 font-weight-bold text-primary">Doctor</h6>
{{--                <a class="float-right btn btn-primary btn-sm" href="{{route('property.add')}}">Add New <i class="fa fa-plus"></i></a>--}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Doctor Name</th>
                            <th>Phone Number</th>
                            <th>Division</th>
                            <th>District</th>
                            <th>Area</th>
                            <th>Doctor Type</th>
                            <th>Lift</th>
                            <th>Doctor Fees</th>
                            <th>Age</th>
                            <th>Chamber</th>
                            <th>Visiting Hour</th>
                            <th>Floor</th>
                            <th>Image</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        {{dd($data)}}--}}
                        @foreach($data as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>{{ $p->division }}</td>
                                <td>{{ $p->district }}</td>
                                <td>{{ $p->location }}</td>
                                <td>{{ $p->patient_type }}</td>
                                <td>{{ $p->lift }}</td>
                                <td>{{ $p->rent }}</td>
                                <td>{{ $p->room_quantity }}</td>
                                <td>{{ $p->washroom_quantity }}</td>
                                <td>{{ $p->balcony_quantity }}</td>
                                <td>{{ $p->floor}}</td>
                                <td><img src="{{'/image/property/'.$p->image}}" style="height: 80px; width: 80px;"></td>
                                <td>{!! $p->comment !!}</td>
                                <td>
                                    <a href="{{route('property.edit',['id'=>$p->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('property.delete',['id'=>$p->id])}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
