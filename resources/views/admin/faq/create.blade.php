@extends('layouts.adminbase')

@section('title', 'Add FAQ ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')


    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Add FAQ</li>
        </ol>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>AddFAQ </h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"style="background-color:red">

                            Adding Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Content Elemnts</h3>
                                    <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label>Question</label>
                                            <input type="text" class="form-control" name="question" placeholder="Question">

                                        </div>

                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea class="form-control" id="answer" name="answer">

                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#answer' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>


                                        <div class="form-group">
                                            <label>Select </label>
                                            <label>
                                                <select class="form-control" name="status">
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit </button>
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
