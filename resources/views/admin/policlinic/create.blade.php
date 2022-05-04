@extends('layouts.adminbase')

@section('title','Add Poiclinic')


@section('content')


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Policlinic</h2>
                    <div class="col-md-6">
                        <h3>Poiclinic Elements</h3>
                        <form role="form" action="{{route('admin.policlinic.store')}}" method="post" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group">
                                <label >Parent Poiclinic</label>

                                <select class="form-control select2" name="category_id" style="">
                                    @foreach($data as $rs)
                                        <option value="{{ $rs->id }}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="Text Input">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>





                            <div class="form-group">
                                <label for="Text Input">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="keywords">
                            </div>

                            <div class="form-group">
                                <label for="Text Input">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="description">
                            </div>




                            <div class="form-group">
                                <label>Just A Label Control</label>
                                <p class="form-control-static">info@yourdomain.com</p>
                            </div>





                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>

                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Detail Info</label>
                                <textarea class="form-control" name="detail">

                                </textarea>
                            </div>


                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>Enable</option>
                                    <option>Disable</option>
                                </select>
                            </div>


                            <div class="footer">
                                <button type="submit" class="btn btn-default">Save</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>

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
