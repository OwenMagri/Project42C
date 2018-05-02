<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wrap Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/background.jpeg">
<?php if(!isset($_SESSION['email']))require_once("navbar.php");else require_once("navbarLogout.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col" id="col1">
                <a role="button" class="btn btn-info mt-4" href="menu.php">Back to Menu</a>
                <div class="p-3">
                    <h3>CHICKEN WRAP</h3>
                    <h4>€4.00</h4>
                    <p>Southern Fried Chicken, Coleslaw, Fresh Tomatoes, Melted Cheese, Mayo and BBQ Sauce</p>
                    <button type="button" class="btn btn-primary btn-lg btn-block">ORDER CHICKEN WRAP</button>
                </div>
                <div class="p-3">
                    <h3>BACON WRAP</h3>
                    <h4>€4.00</h4>
                    <p>Fried Egg, Melted Cheese, Coleslaw, Onions, Fresh Tomato and Mayo</p>
                    <button type="button" class="btn btn-primary btn-lg btn-block">ORDER BACON WRAP</button>
                </div>
                <div class="p-3">
                    <h3>VEGGIE WRAP</h3>
                    <h4>€4.00</h4>
                    <p>Fresh Tomato, Onions, Peppers, Mushrooms, Coleslaw, Marrows, Aubergines and Melted Cheese</p>
                    <button type="button" class="btn btn-primary btn-lg btn-block">ORDER VEGGIE WRAP</button>
                </div>
                <div class="p-3">
                    <h3>MEAT WRAP</h3>
                    <h4>€4.00</h4>
                    <p>Fresh Meat, Fried Onion, Mozzarella, Coleslaw and BBQ Sauce</p>
                    <button type="button" class="btn btn-primary btn-lg btn-block">ORDER MEAT WRAP</button>
                </div>
                
            </div>
            <div class="col" id="col1">
                <div class="p-4 mt-3">
                    <img src="images/chickenwrap.jpg" height="200px" width="492px">
                </div>
                <div class="p-4 mt-3">
                    <img src="images/baconwrap.jpg" height="250px" width="492px">
                </div>
                <div class="p-4 mt-3">
                    <img src="images/veggiewrap.jpg" height="250px" width="492px">
                </div>
                
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>