@extends('layouts.home.main');

@section('content')
    {{--    <div class="pageBradcamb"  style="background-image:url({{asset('homes/images/slides/1.jpg')}}); width: 100%; height: 75%; margin-top: -20px;">--}}
    <div class="pageBradcamb"  style="background-color: #f792d6; margin-top: -20px;">
        <div class="bradcambContent">
            Doctors
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

                                    <img src="{{'image/property/'.$k->image}}" class="img-responsive" style="width: 100% !important;">
                                    <div class="content-title">
                                        <div class="text-center">
                                            <p><a href="{{route('property_details',['id'=>$k->id])}}">{{$k->name}} {{$k->location}}</a></p>
                                            <p><b>Fees: </b> {{$k->rent}}</p>
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

