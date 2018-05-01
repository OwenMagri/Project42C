<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/background.jpeg">
    <?php require_once("navbar.php"); ?>
    <div class="container">
            <div class="jumbotron mt-5">
            <h2 class="display-4">Register Account</h2>
                <form class="mt-4">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">This will be your login details</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Address Line 1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="City">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Country">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block mt-4">SUBMIT</button>
                    <a role="button" href="login.php" class="btn btn-danger btn-lg btn-block mt-4">ALREADY HAVE AN ACCOUNT?</a>
                </form>
            </div>
        </div>
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>