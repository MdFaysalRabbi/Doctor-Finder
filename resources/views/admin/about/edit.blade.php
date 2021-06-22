@extends('layouts.admin.app')

@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="float-left m-0 font-weight-bold text-primary">Edit About Us</h6>
                {{--                <a class="float-right btn btn-primary btn-sm" href="{{route('slider.add')}}">Add New <i class="fa fa-plus"></i></a>--}}
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-group" action="{{route('about.update',['id'=>$about->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="col-md-12">
                        <label for="">Title</label>
                        <input type="text" class="form-control" value="{{$about->title}}" name="title" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Details">Details</label>
                        <textarea class="form-control" name="details" required>{{$about->details}}</textarea>
                    </div>
                    <div class="col-md-12 mb-2 mt-2">
                        <div class="form-group">
                            <span style="color: black; ">Image:</span>
                            <div class="custom-file">
                                <input type="file" name="image" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-show-errors="true" data-show-loader="true">
                            </div>
                        </div>
                        <img src="{{asset('image/about/'.$about->image)}}" style="height: 80px; width: auto;">
                    </div>
                    <div class="col-md-2 text-center d-flex ml-auto">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
