@extends('layouts.home.main');

@section('content')
{{--<div class="pageBradcamb"  style="background-image:url({{asset('homes/images/slides/1.jpg')}}); width: 100%; height: 75%; margin-top: -20px;">--}}
<div class="pageBradcamb"  style="background-color: #f792d6; margin-top: -20px;">
    <div class="bradcambContent">
        About Us
    </div>
</div>
<div class="container">
    <section id="content-3-10" class="content-block data-section nopad content-3-10" style="margin-top: 10px; margin-bottom: 10px;">
@foreach($data as $data)
        <div class="image-container col-sm-6 col-xs-12 pull-left">
            <div class="background-image-holder" style="background-image: url({{'image/about/'.$data->image}})">
            </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                @foreach($data as $data)
                <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
{{--                    <div class="editContent">--}}
{{--                        <h3>{{$data->title}}</h3>--}}
{{--                    </div>--}}
                    <div class="editContent">
                        {!! $data->details !!}
                    </div>
{{--                    <a href="#gallery" class="btn btn-outline btn-outline outline-dark">Learn More</a>--}}
                </div>
                    @endforeach
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section>
</div>

<!-- contact section -->
@endsection
