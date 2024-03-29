@extends('layouts.frontbase')

@section('title',$data->title)
@section('content')

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{Storage::url($data->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About <span>{{$data->title}}</span>
                            </h2>
                        </div>
                        <p>
                            {!! $data->description !!}
                        </p>
                        <form class="review-form"  action="{{route('storecomment')}}" method="post">
                        <div class="form-group">
                            @csrf
                            <div class="form-group">
                            <input class="input" type="hidden" name="policlinic_id"  value="{{$data->id}}" >
                            </div>

                            @php $average = $data->comment->average('rate'); @endphp
                            <div class="input-rating">
                                <strong class="text-uppercase">Your Ratings: {{$data->comment->count('rate')}} </strong>
                                <div class="decoration-indigo-700">
                                    <li class="fa fa-star @if ($average<1) -o empty @endif"></li>
                                    <li class="fa fa-star @if ($average<2) -o empty @endif"></li>
                                    <li class="fa fa-star @if ($average<3) -o empty @endif"></li>
                                    <li class="fa fa-star @if ($average<4) -o empty @endif"></li>
                                    <li class="fa fa-star @if ($average<5) -o empty @endif"></li>
                                </div>

                                <input type="number" id="star5" name="rate" value="5" /><label for="star5"></label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <textarea class="input-group" name="review" type="text" name="review" placeholder="Review"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" placeholder="Your name" />
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="email" placeholder="Your Email" />
                                    </div>
                                    @auth()
                                        <input class="form-control" type="submit"  value="Send Comment" >
                                    @else
                                        <a href="/login" class="btn btn-outline-danger">For Submitting Your Review, Please Login</a>
                                    @endauth
<hr>
                                    <strong><h3>REVIEWS </h3></strong>
                                </div>
                            </div>
                        </div>
                        </form>
                        @foreach($reviews as $rs)

                            <div class="col-md-12">
                                <div><i class="fa fa-user-o"></i> {{$rs->user->name}} Rating: {{$rs->rate}}</div>
                                <div class="text-gray-800"><i class="fa fa-clock-o"></i> {{$rs->created_at}}</div>
                                <strong>{{$rs->review}}</strong>
                                <hr>
                            </div>
                        @endforeach
                        <a href="\">
                            Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info_section ">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <a href="">
                        <img src="http://127.0.0.1:8000/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="info_form">
                    <form action="">
                        <input type="email" placeholder="Your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
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
                  Location
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
                  demo@gmail.com
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
                                <a href="about.html">
                                    About
                                </a>
                                <a href="treatment.html">
                                    Treatment
                                </a>
                                <a href="doctor.html">
                                    Doctors
                                </a>
                                <a href="testimonial.html">
                                    Testimonial
                                </a>
                                <a href="contact.html">
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
                                    <img src="http://127.0.0.1:8000/assets/images/post1.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="http://127.0.0.1:8000/assets/images/post2.jpg" alt="">
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
                                    <img src="http://127.0.0.1:8000/assets/images/post3.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="http://127.0.0.1:8000/assets/images/post4.png" alt="">
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
@endsection
