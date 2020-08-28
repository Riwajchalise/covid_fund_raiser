<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Donor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid main-bg">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-md-6 main-title">
            <h2 class="display-3"><b>Make COVID-19 battling lives easier.</b></h2><br>
            <h4> A COVID-19 info medium to track, request and transfer relief funds.</h4>
        </div>

        <div class="col-md-6 register-col">
            <div class="register-bg">
            <h1 class="text-center" style="color: white">Register As a Donor</h1>

            <form action={{route('registerAsDonor')}} method="post"  class="register-form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputNumber">Phone Number</label>
                    <input name="phone" type="number" class="form-control" id="exampleInputNumber" placeholder="Phone Number">
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-sub">Submit</button> &nbsp;<p>Already a member?
                <a href="/login" >Login</a></p>
            </form>
            </div>

        </div>
    </div>

</div>
</body>
</html>