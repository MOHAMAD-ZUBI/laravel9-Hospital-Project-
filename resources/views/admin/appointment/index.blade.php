@extends('layouts.adminbase')

@section('title','Appointment List')


@section('content')


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-2">

                </div>
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
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>doctor</th>
                                    <th>Status</th>
                                    <th style="width: 110px">Show</th>
                                    <th style="width: 110px">Delete</th>

                                </tr>
                                </thead>

                                @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->date}}</td>
                                    <td>{{$rs->time}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->payment}}</td>
                                    <td>{{$rs->doctorname}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>
                                        <a href="{{route('admin.appointment.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"
                                            onclick="return !window.open(this.href,'','top = 50 left= 100 width=1100,height=700')">
                                            Show
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.appointment.destroy',['id'=>$rs->id])}}"class="btn  btn-danger btn-sm"
                                           onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>

                                </tr>

                                @endforeach
                                </tbody>

                            </table>
                        </div><!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
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
