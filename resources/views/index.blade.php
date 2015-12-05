@yield('head')
<body>

<nav class="navbar navbar-default">
    <div class=" container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                converter-x.com
            </a>
        </div>

       @include('parts.language')

    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 main">
            @yield('main_content')
        </div>
        <div class="col-xs-12 col-sm-4 right">
           @yield('sidebar')
        </div>
    </div>

</div><!-- /.container -->

@yield('footer')
</body>
</html>