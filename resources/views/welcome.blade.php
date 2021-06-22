@extends('layouts.home.main')
@section('slide_b')
    <div class="banner" id="banner" style="height: 700px; !important;">
        <div class="slider-banner">
{{--            {{dd($slider)}}--}}
            @foreach($slider as $s)
            <div data-lazy-background="{{asset('image/slider/'.$s->image)}}">
                <h3 data-pos="['68%', '-40%', '58%', '42%']" data-duration="700" data-effect="move">

                </h3> <br>
                <p data-pos="['75%', '110%', '75%', '36%']" data-duration="700" data-effect="move">

                </p>
            </div>
            @endforeach
        </div>
        <!-- banner text -->
    </div>
    @endsection

@section('about')
    @foreach($slider as $data)
    <section id="content-3-10" class="content-block data-section nopad content-3-10">
        <div class="image-container col-sm-6 col-xs-12 pull-left">
            <div class="background-image-holder" style="background-image: url({{'image/about/'.$data->image}}); height: 100% !important;">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
                    <div class="editContent">
                                                <h3>{{$data->title}}</h3>
                    </div>
                    <div class="editContent">
                                                {!! $data->details !!}
                    </div>
                    <a href="{{route('about')}}" class="btn btn-outline btn-outline outline-dark">Learn More</a>
                </div>
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section>
    @endforeach
@endsection

@section('mission')
    <section class="video-section">
        <div class="container">
            <div class="row">
                <div id="content24" data-section="content-24" class="data-section">
                    <div class="col-md-6">
                        <h3 class="eidtContent">Mission & Vision</h3>
                        <p class="eidtContent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="editContent">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <p class="editContent">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/146742515?badge=0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div>
    </section>
@endsection

{{--@section('gallery')--}}
{{--    <section id="gallery" class="gallery section" style="margin-top: 40px">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-header">--}}
{{--                <h2 class="wow fadeInDown animated">Gallery</h2>--}}
{{--                --}}{{--            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>--}}
{{--            </div>--}}
{{--            <div class="row no-gutter">--}}
{{--                @foreach($gallery as $g)--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('image/GALLERY/'.$g->image)}}" class="work-box"> <img class="img-responsive" src="{{'image/gallery/'.$g->image}}" alt="">--}}
{{--                        <div class="overlay">--}}
{{--                            <div class="overlay-caption">--}}
{{--                                <p><span class="icon icon-magnifying-glass"></span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- overlay -->--}}
{{--                    </a> </div>--}}
{{--                    @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    @endsection--}}


