<?php 
    session_start();
    require_once("connection.php");
    $conn = connectToMySQL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body style="background: #e1e8f4;">
<?php if(!isset($_SESSION['email']))header("Location: index.php");else require_once("navbarLogout.php");?>
    <div class="container">
        <h1 class="display-4 mt-4" style="text-align:center;">Thank You!</h1>
        <h3 class="display-4 mt-2" style="text-align:center;">Your Order has been Received</h3>
        <hr style="background-color:black;">
        <div style="margin-left:200px;">
        <h4>Delivery Details:</h4>
            <div style="float:left;">
                
                <p class="mt-3 mr-4" id="name">Full Name: </p>
                <p id="email">Email: </p>
                <p id="address">Address: </p>
                <p id="phone">Phone: </p>
                <p id="city">City: </p>
            </div>
            <div >
                <?php 
                    $clientemail = $_SESSION['email'];

                    $query = "SELECT * FROM tbl_client WHERE email = '$clientemail'";

                    $result = mysqli_query($conn,$query)
                    or die("Error in query: ".mysqli_error($conn));

                    while ($row = mysqli_fetch_assoc($result))
                    {
                ?>  
                <div class="mt-4">
                    <p><?php echo $row["name"]; echo ' '.$row["surname"]; ?></p>
                    <p><?php echo $row["email"]; ?></p>
                    <p><?php echo $row["address"]; ?></p>
                    <p><?php echo $row["phone"]; ?></p>
                    <p><?php echo $row["city"]; ?></p>
                </div><br/>
                <a role="button" href="index.php" class="btn btn-success" style="color:white;">Go Back to Home Page</a>
                <?php        
                        }
                ?>
            </div>
            


            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>