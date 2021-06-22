@extends('layouts.home.main');

@section('content')
    {{--    <div class="pageBradcamb"  style="background-image:url({{asset('homes/images/slides/1.jpg')}}); width: 100%; height: 75%; margin-top: -20px;">--}}
    <div class="pageBradcamb"  style="background-color: #f792d6; margin-top: -20px;">
        <div class="bradcambContent">
            Area Guide
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
                                    <h4>{{$k->area_name}}</h4>
                                    <iframe width="100%" height="225px" src="https://www.youtube.com/embed/{{$k->youtube_links}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

