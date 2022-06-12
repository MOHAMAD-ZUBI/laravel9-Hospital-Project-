@extends('layouts.frontbase')

@section('title','Contact Us | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Get In <span>Touch</span>
                </h2>
            </div>
            @include('home.messages')
            <div class="row">
                <div class="col-md-7">
                    <div class="form_container">
                        <form action="{{route("storemessage")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="input" type="text" name="name" placeholder="Name & Surname">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <input type="text" name="message" class="message-box" placeholder="Your Message">
                            </div>
                            <div class="form-group">
                                <input class="input" type="submit" value="Send Message">
                            </div>


                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="{{asset('assets')}}/images/contact-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Contact <span>Info</span>
                            </h2>
                        </div>
                        <p>
                            {!! $setting->contact !!}
                        </p>
                        <a href="\">
                            Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
