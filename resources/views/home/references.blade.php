@extends('layouts.frontbase')

@section('title','References | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

    <section class="about_section layout_padding">
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
                                Our <span>References</span>
                            </h2>
                        </div>
                        <p>
                                {!! $setting->references !!}
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
