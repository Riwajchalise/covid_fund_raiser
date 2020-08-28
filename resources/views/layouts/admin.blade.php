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
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<div class="container-fluid navbar">
    <h3 align="left">Covid Fund Tracker</h3>
    <div align="right">
        <strong>Welcome {{ Auth::user()->email }}</strong>
        <br />
        <a href="{{ url('/logout') }}">Logout</a>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @yield('content')

        </div>
    </div>
</div>


</body>
</html>
