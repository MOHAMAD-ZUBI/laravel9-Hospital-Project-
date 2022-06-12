@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!-- slider section -->
    <section class="slider_section ">
        <div class="dot_design">
            <img src="{{asset('assets')}}/images/dots.png" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Mico <br>
                                        <span>
                        Hospital
                      </span>
                                    </h1>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    </p>
                                    <a href="/contactus">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/slider-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Mico <br>
                                        <span>
                        Hospital
                      </span>
                                    </h1>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    </p>
                                    <a href="">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/slider-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Mico <br>
                                        <span>
                        Hospital
                      </span>
                                    </h1>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    </p>
                                    <a href="/contactus">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/slider-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <img src="{{asset('assets')}}/images/prev.png" alt="">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <img src="{{asset('assets')}}/images/next.png" alt="">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>
    <!-- end slider section -->


    <!-- book section -->

    <section class="book_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col">
                        <h4>
                            BOOK <span>APPOINTMENT</span>
                        </h4>

                    @auth()
                        @include('home.messages')
                    <form action="{{route("storeappointment")}}" method="post">
                        @csrf
                        <div class="form-row ">
                            <div class="form-group col-lg-4">
                                <label for="inputPatientName">Patient Name </label>
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Name & Surname">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDoctorName">Doctor's Name</label>
                                <input type="text" class="form-control" name="doctorname"  placeholder="Doctor's Name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDepartmentName">Policlinic</label>
                                <select name="policlinic_id" class="form-control wide" id="inputDepartmentName">
                                    @foreach($policliniclist1 as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="inputDepartmentName">Payment</label>
                                <select name="payment" class="form-control wide" id="inputDepartmentName">

                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputSymptoms">Symptoms</label>
                                <input type="text" name="note" class="form-control" id="inputSymptoms" placeholder="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDate">Choose Date </label>
                                <input type="date" class="form-control" name="date"  placeholder="Date">
                            </div>
                        </div>


                        <div class="btn-box">
                            <button type="submit" class="btn ">Submit Now</button>
                        </div>
                    </form>
                    @endauth
                    @guest()
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                            <h4>
                                <a href="{{route('userlogin')}}">please login!</a>
                            </h4>
                                </div>
                            </div>
                        </div>

                    @endguest
                </div>
            </div>
        </div>
    </section>


    <!-- end book section -->


    <!-- about section -->

    <section class="about_section">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{asset('assets')}}/images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About <span>Hospital</span>
                            </h2>
                        </div>
                        <p>
                            We’ve served this richly diverse region as a community hospital for more than 60 years. And as the area has grown, so have we. But as Long Island doctors, nurses, and healthcare professionals, we’ve never outgrown our devotion to the health of the community we all call home.
                        </p>
                        <a href="/about">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->


    <!-- treatment section -->

    <section class="treatment_section layout_padding">
        <div class="side_img">
            <img src="{{asset('assets')}}/images/treatment-side-img.jpg" alt="">
        </div>
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Hospital <span>Treatment</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-3">
                    @foreach($policliniclist1 as $rs)
                    <div class="box ">

                            <img src="{{Storage::url($rs->image)}}" style="height: 120px">

                        <div class="detail-box">
                            <h4>
                                {{$rs->title}}
                            </h4>
                            <a href="{{route('policlinic',['id'=>$rs->id])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- end treatment section -->



    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our <span>Policlinics</span>
                </h2>
            </div>
        </div>
        <div class="container px-0">
            <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $count = 0;
                    @endphp
                    @foreach($policliniclist1 as $rs)
                    <div class="carousel-item @if($count == 0) active @endif">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        {{$rs->title}}
                                    </h5>
                                    <div class="img-box">
                                        <img src="{{Storage::url($rs->image)}}" style="height: 200px"/>
                                    </div>

                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                    {{$rs->description}}
                            </p>
                        </div>
                    </div>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->

    <!-- contact section -->
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
    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <a href="">
                        <img src="{{asset('assets')}}/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="info_bottom layout_padding2">
                <div class="row info_main_row">
                    <div class="col-md-6 col-lg-3">
                        <h5>
                            Address
                        </h5>
                        <div class="info_contact">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                  Karabuk
                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                  Call +01 1234567890
                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>
                  hospital@gmail.com
                </span>
                            </a>
                        </div>
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_links">
                            <h5>
                                Useful link
                            </h5>
                            <div class="info_links_menu">
                                <a class="active" href="index.html">
                                    Home
                                </a>
                                <a href="{{route('about')}}">
                                    About
                                </a>
                                <a href="{{route('about')}}">
                                    Treatment
                                </a>
                                <a href="#">
                                    Policlinics
                                </a>
                                <a href="{{route('faq')}}">
                                    FAQ
                                </a>
                                <a href="{{route('contactus')}}">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>
                                LATEST POSTS
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/post1.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/post2.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>
                                News
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/post3.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="{{asset('assets')}}/images/post4.png" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info_section -->

@endsection
