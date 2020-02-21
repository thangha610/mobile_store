<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">
    <title>Admin Mobile Web</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('admin_template/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin_template/css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mobile Web Admin </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="{{ route('admin.get.list.category') }}">Category</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Order</a></li>
                <li><a href="#">Member</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="{{ route('admin.dashboard') }}">Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ route('admin.get.list.category') }}">Category</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Order</a></li>
                <li><a href="#">Member</a></li>
            </ul>
            {{--            <ul class="nav nav-sidebar">--}}
            {{--                <li><a href="">Nav item</a></li>--}}
            {{--                <li><a href="">Nav item again</a></li>--}}
            {{--                <li><a href="">One more nav</a></li>--}}
            {{--                <li><a href="">Another nav item</a></li>--}}
            {{--                <li><a href="">More navigation</a></li>--}}
            {{--            </ul>--}}
            {{--            <ul class="nav nav-sidebar">--}}
            {{--                <li><a href="">Nav item again</a></li>--}}
            {{--                <li><a href="">One more nav</a></li>--}}
            {{--                <li><a href="">Another nav item</a></li>--}}
            {{--            </ul>--}}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('admin_template/js/bootstrap.min.js') }}"></script>
</body>
</html>
