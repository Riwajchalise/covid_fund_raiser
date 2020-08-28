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
<div class="container-fluid khalti-banner">
    <div class="title">
    <h5 class="khalti-tag">Payment Partner</h5>
    </div>
</div>


<div class="container-fluid request-wrapper">
    <h1 class="text-center" style="color: grey; padding-top: 50px">Request Fund</h1>
    <div class="row mx-auto">

        <div class="form-wrapper">
            <form action="{{ route('fundReceive') }}" method="post" class="request-form">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control form-control-lg" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputCountry">Country</label>
                        <input name="country" type="text" class="form-control form-control-lg" id="exampleInputCountry" placeholder="Country">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Phone Number</label>
                        <input name="phone" type="number" class="form-control form-control-lg" id="exampleInputNumber" placeholder="Enter Khalti ID">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAmount">Amount</label>
                        <input name="amount" type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="Amount">
                    </div>

                    <div class="form-group">
                        <label for="descriptionControlSelect1" class="form-detail">Description</label>
                        <textarea name="description" class="form-control form-custom" id="" cols="30" rows="8"></textarea>
                    </div>
                <button type="submit" class="btn btn-lg btn-primary btn-sub-login">Submit</button> &nbsp;
            </form>
        </div>
    </div>
</div>

</body>
</html>