@extends('layouts.frontbase')

@section('title','My Reviews')



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

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-8">
                            <div class="box-header">
                                <h3 class="box-title">Reviews</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Policlinic_id</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th style="width: 110px">Delete</th>

                                    </tr>
                                    </thead>

                                    @foreach($comments as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('policlinic', ['id'=>$rs->policlinic_id])}}" >{{$rs->policlinic->title}}</a></td>
                                            <td>{{$rs->review}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('userpanel.deleterev',['id'=>$rs->id])}}"<a onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>

                                        </tr>

                                        @endforeach
                                        </tbody>

                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->



@endsection
