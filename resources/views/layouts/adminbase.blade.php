<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("Title")</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->


    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

@yield("head")
</head>


@section('sidebar')
    @include("admin.sidebar")
@show
@include("admin.header")
@yield('content')

<body>

</body>
</html>