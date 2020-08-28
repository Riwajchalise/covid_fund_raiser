<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Fund</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid fun-req">
    <div class="layer"></div>
    <div class="row mx-auto">

            <div class="from-wrapper">
                <h1 class="text-center" style="color: white">Request Fund</h1>
                <form action="{{route('registerAsReceiver')}}" class="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter your name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputCountry">Country</label>
                        <input type="text" class="form-control" id="exampleInputCountry" aria-describedby="countryHelp" placeholder="Enter your country">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputNumber" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDescription" class="form-detail">Description</label>
                        <select class="form-control form-custom" id="exampleInputDescription">
                            <option>Organization</option>
                            <option>Individual</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-lg btn-outline-light">Submit</button> &nbsp;
                </form>
            </div>




        </div>
    </div>
</div>

</body>
</html>