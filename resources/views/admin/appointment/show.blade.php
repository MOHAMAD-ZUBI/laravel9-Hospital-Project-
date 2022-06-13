@extends('layouts.adminwindow')

@section('title', 'Show Appointment : '. $data->title )

@section('content')



    <div id="page-wrapper" >

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-default">
                                        <div class="panel-heading"style="background-color:red"> Detail Appointment Data</div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th style="width: 200px">Id</th>
                                                        <td>{{$data->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date</th>
                                                        <td>{{$data->date}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Time</th>
                                                        <td>{{$data->time}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Symptoms</th>
                                                        <td>{{$data->note}}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>DoctorName</th>
                                                        <td>{{$data->doctorname }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Price</th>
                                                        <td>{{$data->price}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>status</th>
                                                        <td>{{$data->status}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created Date</th>
                                                        <td>{{$data->created_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Update Date</th>
                                                        <td>{{$data->updated_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>USER NOTE</th>
                                                        <td>{{$data->note}}</td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

@endsection
