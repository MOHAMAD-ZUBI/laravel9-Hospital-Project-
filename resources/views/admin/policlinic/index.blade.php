@extends('layouts.adminbase')

@section('title','Policlinic List')


@section('content')


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{route('admin.policlinic.create')}}" class="btn btn-block btn-info">Add Policlinic</a>

                </div>
                <div class="col-md-12">
                    <div class="col-sm-12">
                        <div class="box-header">
                            <h3 class="box-title">Policlinic List</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>

                                </tr>

                                @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>

                                    <td>
                                        @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                    </td>
                                    <td> <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                            onclick="return !window.open(this.href,'','top = 50 left= 100 width=1100,height=700')">
                                        <img src="{{asset('assets')}}/admin/img/gallery.jpg" style="height: 40px">
                                        </a>
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.policlinic.edit',['id'=>$rs->id])}}" class="btn btn-info">Edit</a> </td>
                                    <td><a href="{{route('admin.policlinic.delete',['id'=>$rs->id])}}"class="btn  btn-danger btn-sm" onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.policlinic.show',['id'=>$rs->id])}}"class="btn btn-success btn-sm">Show</a></td>

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
