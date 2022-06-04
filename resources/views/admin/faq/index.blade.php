@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">FAQ List</li>
        </ol>

        <a href="{{route('admin.faq.create')}}"class="btn btn-info ">Add Question</a>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading"> FAQ List</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Status</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                        <th style="width: 40px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $data as $rs)
                                        <tr class="success">
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->question}}</td>
                                            <td>{!! $rs->answer!!}</td>

                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"<a class="btn btn-info btn-sm">Edit</a></td>

                                            <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"<a onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>

                                            <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"<a class="btn btn-success btn-sm">Show</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
