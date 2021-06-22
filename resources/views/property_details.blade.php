@extends('layouts.home.main');

@section('content')
    {{--    <div class="pageBradcamb"  style="background-image:url({{asset('homes/images/slides/1.jpg')}}); width: 100%; height: 75%; margin-top: -20px;">--}}
    <div class="pageBradcamb"  style="background-color: #f792d6; margin-top: -20px;">
        <div class="bradcambContent">
            Doctors Details
        </div>
    </div>


    <section id="blog-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="panel panel-default" style="padding: 15px;">

{{--                            <h4 class="text-left"><b>{{$data->name}}</b></h4>--}}
{{--                            <p class="text-left">Author: {{$data->author}}</p>--}}
                            <img src="{{asset('image/property/'.$data->image)}}" alt="" style="width: 50%;">
                            <p><b>Doctor name: </b> {{$data->name }}</p>
{{--                            <p><b>Email: </b> {{$data->email }}</p>--}}
                            <p><b>Phone number: </b> {{$data->phone }}</p>
                            <p><b>Location: </b> {{$data->location }} {{$data->district}} {{$data->division}}</p>
                            <p><b>Doctor Fees:: </b> {{$data->rent }}</p>
                            <p><b>Age: </b> {{$data->room_quantity }}</p>
                            <p><b>Chamber: </b> {{$data->washroom_quantity }}</p>
                            <p><b>Lift: </b> {{$data->lift }}</p>
                            <p><b>Visiting Hour: </b> {{$data->balcony_quantity }}</p>
                            <p><b>Floor: </b> {{$data->floor }}</p>
                            <p><b>Doctor Type: </b> {{$data->tenant_type }}</p>
                            <hr>
                            {!! $data->comment !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- contact section -->
@endsection
