<!DOCTYPE html>
<html>
<head>
    <title>Admin | Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://unpkg.com/khalti-checkout-web@latest/dist/khalti-checkout.iffe.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Covid Fund Tracker</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('main/successlogin')}}">Home</a></li>
            @if (Auth::user()->role_id == 1)
                <li><a href="{{url('donor/list')}}">Donors</a></li>
                <li><a href="{{url('/donated')}}">Donations</a></li>
            @else
                <li><a href="{{url('/donated')}}">My Donations</a></li>

            @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome {{ Auth::user()->email }}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @yield('content')

        </div>
    </div>
</div>


</body>
</html>
