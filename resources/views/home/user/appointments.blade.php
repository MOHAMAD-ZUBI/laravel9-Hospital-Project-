@extends('layouts.frontbase')

@section('title','hello')



@section('content')
    <div id="page-wrapper">
        <div class="col-md-12"style="padding-bottom: 50px">
            <section>
                <h2 style="padding:40px">USER <span style="color: #0f6674">MENU</span></h2>
                <div class="col-md-8">
                    @include('home.user.usermenu')
                </div>
            </section>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="col-sm-12">
                <div class="box-header">
                    <h3 class="box-title">Appointment List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Payment</th>
                            <th>doctor</th>
                            <th>Status</th>
                            <th>Symptoms</th>
                            <th style="width: 110px">Delete</th>

                        </tr>
                        </thead>

                        @foreach($appointments as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->date}}</td>
                                <td>{{$rs->time}}</td>
                                <td>{{$rs->payment}}</td>
                                <td>{{$rs->doctorname}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->note}}</td>
                                <td><a href="{{route('userpanel.deleteappointment',['id'=>$rs->id])}}"<a onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>

                            </tr>

                            @endforeach
                            </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
