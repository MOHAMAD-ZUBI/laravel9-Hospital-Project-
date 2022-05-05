@extends('layouts.adminbase')

@section('title','Show Category :'.$data->title)


@section('content')


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row mb-lg-3">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Show Category</li>
                    </ol>
                </div>
                <div class="box-header">
                    <div class="col-sm-5"><h3 class="box-title">Details</h3></div>

                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Category</th>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Title</th>
                                    <td>{{$data->title}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Keywords</th>
                                    <td>{{$data->keywords}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Description</th>
                                    <td>{{$data->description}}</td>

                                </tr>
                                <tr>
                                    <th>Detail Inf</th>
                                    <td>{!! $data->detail !!}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Image</th>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Status</th>
                                    <td>{{$data->status}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Created Date</th>
                                    <td>{{$data->created_at}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Update Date</th>
                                    <td>{{$data->updated_at}}</td>

                                </tr>
                            </table>
                        </div><!-- /.box-body -->
                    </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-sm-3">
                <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-block btn-info">Edit</a>
            </div>
            <div class="col-sm-3">
                <a href="{{route('admin.category.delete',['id'=>$data->id])}}" class="btn btn-block btn-danger"onclick="return confirm('Deleting!! Are you sure?')">Delete</a>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
