<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/background.jpeg">
    <?php if(!isset($_SESSION['email']))require_once("navbar.php");else require_once("navbarLogout.php"); ?>
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Contact Us</h1>
            <p class="font-weight-light">If you have any feedback, comments or anything you would like to suggest to us, please contact us through the contact form underneath. We are always ready and willing to server our customers.</p>
            <form class="mt-3" method="post" action="contactus.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" rows="5" name="comment" placeholder="Comment"></textarea>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block mt-4" value="SUBMIT"/>
                    <div id="error" style="color:red;font-size:20px;"></div>
            </form>
        </div>
    </div>

    <?php 
        if(isset($_POST['submit'])){
            if((empty($_POST['email'])) || (empty($_POST['name'])) || (empty($_POST['comment']))){
                echo "<script type='text/javascript'>";
                echo "document.getElementById('error').innerHTML = 'Please fill in all the fields'";
                echo "</script>";
            } else{
                $comment = $_POST['comment'];
                $email = $_POST['email'];
                $subject = $_POST['name'];

                mail("projectassignmentemail@gmail.com","$subject","$comment", "From: $email");
                //pass = 1project123
            }
        }
    
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>