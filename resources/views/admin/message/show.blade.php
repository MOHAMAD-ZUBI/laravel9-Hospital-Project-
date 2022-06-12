@extends('layouts.adminwindow')

@section('title', 'Show Message : '. $data->title )

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
                                        <div class="panel-heading"style="background-color:red"> Detail Message Data</div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th style="width: 200px">Id</th>
                                                        <td>{{$data->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Name & surname</th>
                                                        <td>{{$data->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone Number</th>
                                                        <td>{{$data->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{$data->email}}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Subject</th>
                                                        <td>{{$data->subject }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Message</th>
                                                        <td>{{$data->message}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>IP Number</th>
                                                        <td>{{$data->ip}}</td>
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
                                                        <th>Admin Note : </th>
                                                        <td>
                                                            <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" >
                                                                @csrf
                                                                <textarea class="form-control" id="note" name="note">{{$data->note}}</textarea>
                                                                <button type="submit" class="btn btn-default">Update Note</button>
                                                                <button type="reset" class="btn btn-primary">Reset </button>

                                                            </form>
                                                        </td>
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
