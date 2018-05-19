<?php 
    require_once("connection.php");
    $conn = connectToMySQL();
?>

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
                <form class="mt-4" method="post" action="register.php">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="surname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <small class="form-text text-muted">This will be your login details</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Address Line 1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="country" placeholder="Country">
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block mt-4" value="SUBMIT"/>
                    <div id="error" style="color:red;font-size:20px;"></div>
                    <a role="button" href="login.php" class="btn btn-danger btn-lg btn-block mt-4">ALREADY HAVE AN ACCOUNT?</a>
                </form>
            </div>
        </div>

        <?php 
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $city = $_POST['city'];
                $country = $_POST['country'];

                if ((!empty($name)) && (!empty($surname)) && (!empty($email)) && (!empty($password)) && (!empty($address))
                && (!empty($phone)) && (!empty($city)) && (!empty($country))){

                    $query3 = "SELECT count(*) FROM tbl_client WHERE email = '$email'";

                    $result3 = mysqli_query($conn,$query3)
                    or die("Error in query: ".mysqli_error($conn));

                    $row3 = mysqli_fetch_row($result3);
                    $count3 = $row3[0];
                    if($count3 > 0){
                        echo "<script type='text/javascript'>";
                        echo "document.getElementById('error').innerHTML = 'Email is already taken. Please enter a different Email'";
                        echo "</script>";
                    }else{
                        $query = "INSERT INTO tbl_client (name, surname, email, password, address, phone, city, country)
                        VALUES ('$name', '$surname', '$email', '$password', '$address', '$phone', '$city', '$country')";

                        $result = mysqli_query($conn, $query)
                        or die("Error in query: ". mysqli_error($conn));
                    } 
                }else{
                    echo "<script type='text/javascript'>";
                    echo "document.getElementById('error').innerHTML = 'Please fill in all the fields'";
                    echo "</script>";
                }
            }
        ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>