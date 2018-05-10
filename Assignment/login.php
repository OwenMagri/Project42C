<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/background.jpeg">
    <?php if(!isset($_SESSION['email']))require_once("navbar.php");else require_once("navbarLogout.php"); ?>
    <?php require_once("connection.php"); ?>
        <div class="container">
            <div class="jumbotron mt-5">
            <h2 class="display-4">Login</h2>
                <form class="mt-2" method="post" action="login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block mt-4" value="SUBMIT"/>
                    <div id="error" style="color:red;font-size:20px;"></div>
                    <a role="button" href="register.php" class="btn btn-danger btn-lg btn-block mt-4">REGISTER NEW ACCOUNT</a>
                </form>
            </div>
        </div>

        <?php 
            if(isset($_POST['submit'])){
                if((empty($_POST['email'])) || (empty($_POST['password']))){
                    echo "<script type='text/javascript'>";
                    echo "document.getElementById('error').innerHTML = 'Please fill in all the fields'";
                    echo "</script>";
                } else{
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $conn = connectToMySQL();

                    $query = "select count(*) from tbl_client
                          where email = '$email' and password = '$password'";

                    $result = mysqli_query($conn,$query)
                    or die("Error in query: ".mysqli_error($conn));

                    $row = mysqli_fetch_row($result);
                    $count = $row[0];

                    if($count > 0){
                        $_SESSION['email'] = $email;

                        $conn = connectToMySQL();

                        $query = "select clientId from tbl_client
                            where email = '$email' and password = '$password'";

                        $result = mysqli_query($conn,$query)
                        or die("Error in query: ".mysqli_error($conn));

                        $row = mysqli_fetch_row($result);
                        $id = $row[0];
                        
                        $_SESSION['id'] = $id;

                        header("Location: index.php"); 

                    }else{
                        echo "<script type='text/javascript'>";
                        echo "document.getElementById('error').innerHTML = 'Incorrect username or password'";
                        echo "</script>";
                    }
                }//end of else
            }//end of submit
        ?>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>