@extends('layouts.adminbase')

@section('title', 'Edit Content: '. $data->title )
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Edit Content</li>
        </ol>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Content: {{$data->title}} </h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"style="background-color:red">

                            Editing Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Content Elemnts</h3>
                                    <form role="form" action="{{route('admin.policlinic.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Parent Category</label>
                                            <select class="form-control select2" name="category_id" style="...">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id ==$data->category_id) selected="selected" @endif>
                                                        {{\App\Http\Controllers\AdminPanel\Categorycontroller::getParentsTree($rs, $rs->title)}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Keyword</label>
                                            <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description </label>
                                            <input type="text" class="form-control" name="description" value="{{$data->description}}">

                                        </div>
                                        <div class="form-group">
                                            <label>Detail INFO</label>
                                            <textarea class="form-control" id="detail" name="detail">
                                                {{$data->detail}}
                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#detail' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>

                                        </div>

                                        <div class="form-group">
                                            <label>Choose Image </label>
                                            <input type="file" class="custom-file-input" name="image" >
                                        </div>
                                        <div class="form-group">
                                            <label>Choose file</label>
                                            <input type="file" class="custom-file-input" name="file">
                                        </div>

                                        <div class="form-group">
                                            <label>Select </label>
                                            <label>
                                                <select class="form-control" name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-default">Update Data</button>
                                        <button type="reset" class="btn btn-primary">Reset </button>

                                    </form>



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

