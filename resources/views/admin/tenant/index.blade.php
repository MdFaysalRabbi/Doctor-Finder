@extends('layouts.admin.app')

@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="float-left m-0 font-weight-bold text-primary">Patient Information</h6>
                <a class="float-right btn btn-primary btn-sm" href="{{route('tenant.add')}}">Add New <i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Phone</th>
                            <th>Division</th>
                            <th>District</th>
                            <th>Location</th>
                            <th>Patient Type</th>
                            <th>Fees</th>
                            <th>Doctor</th>
                            <th>Blood Group</th>
                            <th>Age</th>
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
                                <td>{{ $p->tenent_type }}</td>
                                <td>{{ $p->budget }}</td>
                                <td>{{ $p->home }}</td>
                                <td>{{ $p->washroom }}</td>
                                <td>{{ $p->balcony }}</td>
                                <td>{!! $p->comment !!}</td>
                                <td>
                                    <a href="{{route('tenant.edit',['id'=>$p->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('tenant.delete',['id'=>$p->id])}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
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
