@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Settings </h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                            <li class=""><a href="#smtp" data-toggle="tab">Smtp Email</a></li>
                            <li class=""><a href="#social" data-toggle="tab">Social media</a></li>
                            <li class=""><a href="#aboutus" data-toggle="tab">About us</a></li>
                            <li class=""><a href="#contact" data-toggle="tab">Contact</a></li>
                            <li class=""><a href="#references" data-toggle="tab">References</a></li>
                        </ul>
                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="general">
                                    @csrf
                                    <input type="hidden" id ="id" name="id" value="{{$data->id}}" class="form-control">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="title"  class="form-control" name="title" value="{{$data->title}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Keyword</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Description </label>
                                        <input type="text" class="form-control" name="description" value="{{$data->description}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Company </label>
                                        <input type="text" class="form-control" name="company" value="{{$data->company}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input type="text" class="form-control" name="address" value="{{$data->address}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input type="text" class="form-control" name="phone" value="{{$data->phone}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="text" class="form-control" name="email" value="{{$data->email}}">

                                    </div>


                                    <div class="form-group">
                                        <label>Choose Icon file</label>
                                        <input type="file" class="custom-file-input" name="icon" >
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


                                </div>

                                <div class="tab-pane fade" id="smtp">
                                    <div class="form-group">
                                        <label>Smtp Server</label>
                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Smtp Email</label>
                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Password</label>
                                        <input type="text" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Port</label>
                                        <input type="text" name="smtpport" value="{{$data->smtpport }}" class="form-control">
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="social">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" value="{{$data->twitter }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>YouTube</label>
                                        <input type="text" name="youtube" value="{{$data->youtube }}" class="form-control">
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="aboutus">
                                    <h4>About Us</h4>
                                    <textarea id="aboutusedit" name="aboutus" >{{$data->aboutus}}</textarea>
                                </div>


                                <div class="tab-pane fade" id="contact">
                                    <h4>Contact</h4>
                                    <textarea id="contactedit" name="contact" >{{$data->contact}}</textarea>

                                </div>


                                <div class="note-editor tab-pane fade" id="references">
                                    <h4>References</h4>
                                    <textarea id="referencesedit" name="references" >{{$data->references}}</textarea>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-default">Update Setting</button>
                            <button type="reset" class="btn btn-primary">Reset </button>
                        </form>
                    </div>
                </div>
            </div>
            @endsection

            @section('foot')
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#contactedit' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#aboutusedit' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#referencesedit' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            @endsection

