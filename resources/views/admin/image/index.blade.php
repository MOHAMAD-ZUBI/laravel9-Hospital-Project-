@extends('layouts.adminwindow')

@section('title','Policlinic Image Gallery')


@section('content')

<h3>{{$policlinic->title}}</h3>
<hr>
    <form role="form" action="{{route('admin.image.store',['pid'=>$policlinic->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group">
            <label for="Text Input">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
            <input class="input-group-text" type="submit" value="Upload">
            </div>
        </div>


    </form>
    <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="box-title">Policlinic Image List</h3>
                            </div>
                            <!-- /.box-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th style="width: 40px">Delete</th>

                                </tr>
                                <tbody>
                                @foreach($images as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.image.delete',['pid'=>$policlinic->id,'id'=>$rs->id])}}"class="btn  btn-danger btn-sm" onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>

                                    </tr>

                                @endforeach
                                </tbody>


                            </table>
                        </div><!-- /.box-body -->
                        </div>

@endsection


