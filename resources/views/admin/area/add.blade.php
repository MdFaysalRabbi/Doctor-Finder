@extends('layouts.admin.app')

@section('content')
    <h3 class="text-center mb-5 mt-5">Add Area Guide</h3>
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
        <form action="{{route('area.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12">
                    <label for="">Area Name</label>
                    <input type="text" class="form-control" placeholder="Title" name="area_name">
                </div>
                <div class="col-md-12 mt-2">
                    <label for="">Youtube Link <span>( Example: https://www.youtube.com/watch?v=<b style="color:red">KTaqc9mB2s4</b> )</span></label>
                    <input type="text" class="form-control" placeholder="Youtube Link" name="youtube_links">
                </div>
                <div class="col-md-2 text-center d-flex ml-auto mt-2">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>
@endsection

