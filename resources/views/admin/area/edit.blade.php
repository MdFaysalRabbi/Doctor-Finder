@extends('layouts.admin.app')

@section('content')
    <h3 class="text-center mb-5 mt-5">Edit Slider Image</h3>
    <div class="col-md-6 offset-md-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('slider.update',['id'=>$slider->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{$slider->title}}">
                </div>
                <div class="col-md-12 mt-2">
                    <input type="text" class="form-control" placeholder="Secondary Text" name="text" value="{{$slider->text}}">
                </div>
                <div class="col-md-12 mb-2 mt-2">
                    <div class="form-group">
                        <span style="color: black; ">Slider Image:</span>
                        <div class="custom-file">
                            <input type="file" name="image" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-show-errors="true" data-show-loader="true">
                        </div>
                    </div>
                    <img src="{{asset('image/slider/'.$slider->image)}}" style="height: 80px; width: auto;">
                </div>

                <div class="col-md-2 text-center d-flex ml-auto">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>
@endsection


