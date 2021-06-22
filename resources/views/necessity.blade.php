@extends('layouts.home.main');

@section('content')
    {{--    <div class="pageBradcamb"  style="background-image:url({{asset('homes/images/slides/1.jpg')}}); width: 100%; height: 75%; margin-top: -20px;">--}}
    <div class="pageBradcamb"  style="background-color: #f792d6; margin-top: -20px;">
        <div class="bradcambContent">
            Patient Information
        </div>
    </div>

    <section id="blog-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @foreach($data as $k)
                            <div class="col-md-3">
                                <aside>

{{--                                    <img src="{{'image/property/'.$k->image}}" class="img-responsive" style="width: 100% !important;">--}}
                                    <div class="content-title">
                                        <div class="text-center">
                                            <p><b>Patient name: </b> {{$k->name }}</p>
                                            <p><b>Phone number: </b> {{$k->phone }}</p>
                                            <p><b>Location: </b> {{$k->location }} {{$k->district}} {{$k->division}}</p>
                                            <p><b>Fees: </b> {{$k->budget }}</p>
                                            <p><b>Doctor type: </b> {{$k->home }}</p>
                                            <p><b>Blood Group: </b> {{$k->washroom }}</p>
                                            <p><b>Age: </b> {{$k->balcony }}</p>
                                            <p><b>Patient Type: </b> {{$k->tenant_type }}</p>
                                            <hr>
                                            {!! $k->comment !!}
                                        </div>
                                    </div>
                                    {{--                                    <div class="content-footer">--}}
                                    {{--                                        --}}{{--                                    <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">--}}
                                    {{--                                        <span style="font-size: 16px;color: #fff;">{{$k->author}}</span>--}}
                                    {{--                                    </div>--}}
                                </aside>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- contact section -->
@endsection

