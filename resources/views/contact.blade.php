@extends('layouts.home.main');

@section('content')
    <div class="pageBradcamb"  style="background-color: #f792d6; margin-top: -20px;">
        <div class="bradcambContent">
            Contact Us
        </div>
    </div>
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 conForm">
                    <div id="message"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('send.mail')}}" >
                        {{csrf_field()}}
                        <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
                        <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
                        <textarea name="message" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
                        <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
                        <div id="simple-msg"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->
    @endsection
