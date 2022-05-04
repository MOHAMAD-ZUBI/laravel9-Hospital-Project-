@extends('layouts.adminbase')

@section('title','Edit Policlinic :'.$data->title)


@section('content')


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">

                <div class="col-md-12">
                    <h2>Edit Policlinic: {{$data->title}}</h2>
                    <div class="col-md-6">
                        <h3>Policlinic Elements</h3>
                        <form role="form" action="{{route('admin.policlinic.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group">
                                <label >Parent Policlinic</label>

                                <select class="form-control select2" name="category_id" style="">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                                <label for="Text Input">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                            </div>

                            <div class="form-group">
                                <label for="Text Input">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="description" value="{{$data->description}}">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>

                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Detail Info</label>
                                <textarea class="form-control" name="detail">
                                    {{$data->detail}}

                                </textarea>
                            </div>


                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-primary">Update Data</button>

                            </div>


                        </form>

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
