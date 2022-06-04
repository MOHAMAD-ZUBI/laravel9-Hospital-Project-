@extends('layouts.frontbase')

@section('title', 'User Register | ' )

@section('content')



    <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Home </a> \ </li>
        <li class="active"> User LogIn</li>
    </ul>



    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    @include('auth.register')

                </div>
            </div>
        </div>
    </div>

@endsection
