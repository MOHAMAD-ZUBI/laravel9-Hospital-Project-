@extends('layouts.frontbase')

@section('title', 'User Panel' )

@section('content')



    <div id="breadcrumb">
        <div class="container" style="padding: 5px">
            <ul class="breadcrumb" style="height: 40px; background-color: #b3d7ff">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> User<span>Panel</span></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                    <h4 class="title">User Profile</h4>
                    <hr>

                    @include('home.user.usermenu')


                </div>

                <div class="col-md-10">



                    <div class="input-checkbox">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
