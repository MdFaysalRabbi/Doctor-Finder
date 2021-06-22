@extends('layouts.admin.app')

@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="float-left m-0 font-weight-bold text-primary">Slider Images</h6>
                <a class="float-right btn btn-primary btn-sm" href="{{route('slider.add')}}">Add New <i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Secondary Text</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Secondary Text</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($data as $post)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->text}}</td>
                                <td><img src="{{'/image/slider/'.$post->image}}" style="height: 80px; width: 80px;"></td>
                                <td>
                                    <a href="{{route('slider.edit',['id'=>$post->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('slider.delete',['id'=>$post->id])}}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
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
