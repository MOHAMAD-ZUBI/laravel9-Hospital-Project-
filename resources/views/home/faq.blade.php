@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('content')



    <div class="section">

        <div class="container">

            <br>
            <div class="row">
                <div class="col-md-12">
                    <h1>Frequently Asked Questions</h1>
                    <hr>
                    <div class="panel-group" id="accordion">
                        @foreach($datalist as $rs)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                            {{$rs->question}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse @once show @endonce">
                                    <div class="panel-body">
                                        {!!$rs->answer!!}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>

            @endsection

