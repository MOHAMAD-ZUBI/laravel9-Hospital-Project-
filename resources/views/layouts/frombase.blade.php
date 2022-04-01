<htm>
    <head>
        <title>App Name -@yield('title')</title>
        @yield('head')
    </head>
    <body>
    <h1>Header</h1>

    @section('sidebar')
        this is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
    <h1>footer</h1>
    @yield('foot')
    </body>
</htm>
