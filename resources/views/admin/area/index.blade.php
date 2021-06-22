@extends('layouts.admin.app')

@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="float-left m-0 font-weight-bold text-primary">Area</h6>
                <a class="float-right btn btn-primary btn-sm" href="{{route('area.add')}}">Add New <i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Area</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($area as $post)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$post->area_name}}</td>
                                <td>{{$post->youtube_links}}</td>
                                <td>
                                    <a href="{{route('area.delete',['id'=>$post->id])}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
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
