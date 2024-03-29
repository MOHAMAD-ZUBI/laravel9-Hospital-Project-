@extends('layouts.adminbase')

@section('title','Edit Appointment :'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">

                <div class="col-md-12">
                    <h2>Edit Randevu: {{$data->id}}</h2>
                    <div class="col-md-6">
                        <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="Text Input">Price</label>
                                <input type="text" class="form-control" name="price" value="{{$data->price}}" >
                            </div>

                            <div class="form-group">
                                <label for="Text Input">Symptoms</label>
                                <input type="text" class="form-control" name="note" value="{{$data->note}}">
                            </div>

                            <div class="form-group">
                                <label for="Text Input">Date</label>
                                <input type="date" class="form-control" name="date" placeholder="date" value="{{$data->date}}">
                            </div>


                            <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post" >
                                @csrf
                                <select name="status">
                                    <option selected> {{$data->status}}</option>
                                    <option>Accept</option>
                                    <option>Deny</option>
                                </select>
                                <button type="submit" class="btn btn-default">Update Note</button>
                                <button type="reset" class="btn btn-primary">Reset </button>

                            </form>


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


