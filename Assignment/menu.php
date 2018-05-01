<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/background.jpeg">
    <?php require_once("navbar.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col" id="col1">
                <div class="p-4 mt-3">
                    <h3>Pizza</h3>
                    <p>We started making our own signature pizza dough eight years ago and we have kept the same ingredients till today. We also offer gluten free dough prepared in a separate kitchen and a limited-time cheesy crust pizza. All doughs are prepared daily.</p>
                    <a role="button" class="btn btn-primary btn-lg btn-block" href="menupizza.php">VIEW ALL PIZZA</a>
                </div>
                <div class="p-4">
                    <h3>Wraps</h3>
                    <p>Choose from 4 wraps prepared on order using the finest ingredients. </p>
                    <a role="button" class="btn btn-primary btn-lg btn-block" href="menuwrap.php">VIEW ALL WRAPS</a>
                </div>
                <div class="p-4">
                    <h3>Pasta</h3>
                    <p>We have a variety of more than 12 pasta plates, including white sauces,red sauces and vegetarian dishes. All our sauces are freshly prepared for each order. </p>
                    <a role="button" class="btn btn-primary btn-lg btn-block" href="menupasta.php">VIEW ALL PASTA</a>
                </div>
                <div class="p-4">
                    <h3>Beverages</h3>
                    <p>A selection of well-known soft drinks to accompany your meal.</p>
                    <a role="button" class="btn btn-primary btn-lg btn-block" href="menubeverage.php">VIEW ALL BEVERAGES</a>
                </div>
            </div>
            <div class="col" id="col1">
                <div class="mt-4">
                    <img src="images/pizzamenu.jpeg" height="400px" width=100%>
                </div>
                <div class="mt-4">
                    <img src="images/pastamenu.jpeg" height="400px" width=100%>
                </div>
            </div>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>