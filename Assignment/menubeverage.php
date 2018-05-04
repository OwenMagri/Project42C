<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beverage Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/background.jpeg">
<?php if(!isset($_SESSION['email']))require_once("navbar.php");else require_once("navbarLogout.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col" id="col1">
                <a role="button" class="btn btn-info mt-4" href="menu.php">Back to Menu</a>
                <div class="p-3 mt-4">
                    <h4 class="text-info"3>COCA-COLA</h3>
                    <h4 class="text-danger">€1.50</h4>
                    <p>0.5L</p>
                </div>
                <div class="p-3">
                    <h3 class="text-info">FANTA</h3>
                    <h4 class="text-danger">€1.50</h4>
                    <p>0.5L</p>
                </div>
                <div class="p-3">
                    <h3 class="text-info">SPRITE</h3>
                    <h4 class="text-danger">€1.50</h4>
                    <p>0.5L</p>
                </div>
                <div class="p-3">
                    <h3 class="text-info">CISK</h3>
                    <h4 class="text-danger">€2.00</h4>
                    <p>0.33L</p><br/><br/>
                    <?php 
                        if(isset($_SESSION['email'])){
                            echo "<a role='button' href='shoppingcart.php' class='btn btn-primary btn-lg btn-block'>ORDER BEVERAGE</a>";
                        }else{
                            echo "<a role='button' href='login.php' class='btn btn-primary btn-lg btn-block'>LOGIN TO ORDER</a>";
                        }
                    ?>
                </div>
                
            </div>
            <div class="col" id="col1">
                <div class="p-4 mt-3">
                    <img src="images/coca.jpg" height="200px" width="200px">
                </div>
                <div class="p-4 mt-3">
                    <img src="images/fanta.jpg" height="200px" width="200px">
                </div>
                <div class="p-4 mt-3">
                    <img src="images/sprite.jpg" height="200px" width="200px">
                </div>
                
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>