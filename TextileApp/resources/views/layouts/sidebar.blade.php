<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<style type="text/css">
     html, body {
                margin: 0;
                height: 100vh;
            }
            .container{
                width: 100%;
            }
            #main{
              height: 61vh;  
            }
</style>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-2">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>