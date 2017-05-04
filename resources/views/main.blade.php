<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/examples/navbar-fixed-top/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2016 21:07:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>CRUD SAMPLE LARAVEL</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset("bootstrap/css/navbar-fixed-top.css") }}" rel="stylesheet">
    <link href="{{ asset("bootstrap/css/sticky-footer.css") }}" rel="stylesheet">
</head>
<body>

@include('header')

<!--ini container-->
<div class="container">
    <div class="row">
       <!--ini buka kolom-->
        <div class="col-lg-10 col-centered">
            @yield('content')
        </div>
    </div>
</div>

@include('footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset("bootstrap/js/jquery.min.js") }}"></script>
<script>window.jQuery || document.write('<script src="{{ asset("bootstrap/js/jquery.min.js") }}""><\/script>')</script>
<script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>

</body>
</html>