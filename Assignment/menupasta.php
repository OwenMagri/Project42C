<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasta Menu</title>
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
                    <h3 class="text-info">CARBONARA</h3>
                    <h4 class="text-danger">€5.50</h4>
                    <p>Onions, Bacon, Egg Yolk, Cream and Parsley</p>
                </div>
                <div class="p-3">
                    <h3 class="text-info">BOLOGNESE</h3>
                    <h4 class="text-danger">€5.00</h4>
                    <p>Onions, Garlic, Minced Beef, Tomato Sauce and Parsley</p>
                </div>
                <div class="p-3">
                    <h3 class="text-info">TORTELLINI</h3>
                    <h4 class="text-danger">€5.50</h4>
                    <p>Cream, Mushrooms, Onion, Garlic and Bacon</p>
                </div>
                <div class="p-3">
                    <h3 class="text-info">LASAGNE</h3>
                    <h4 class="text-danger">€5.50</h4>
                    <p>Home Made Bolognese, White Sauce and Grated Cheese</p><br/><br/>
                    <?php 
                        if(isset($_SESSION['email'])){
                            echo "<a role='button' href='shoppingcart.php' class='btn btn-primary btn-lg btn-block'>ORDER PASTA</a>";
                        }else{
                            echo "<a role='button' href='login.php' class='btn btn-primary btn-lg btn-block'>LOGIN TO ORDER</a>";
                        }
                    ?>
                </div>
                
            </div>
            <div class="col" id="col1">
                <div class="p-4 mt-3">
                    <img src="images/carbonara.jpg" height="200px" width="492px">
                </div>
                <div class="p-4 mt-3">
                    <img src="images/lasagne.jpg" height="250px" width="492px">
                </div>
                <div class="p-4 mt-3">
                    <img src="images/tortellini.jpeg" height="250px" width="492px">
                </div>
                
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>