<?php 
session_start();
require_once("connection.php");
$conn = connectToMySQL();
if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id' => $_GET["id"],  
                     'item_name' =>  $_POST["hidden_name"],  
                     'item_price' => $_POST["hidden_price"],  
                     'item_quantity' => $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="shoppingcart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="shoppingcart.php"</script>';  
                }  
           }  
      }  
 }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body style="background: linear-gradient(#e1e8f4,#cbd8ed);">
<?php if(!isset($_SESSION['email']))header("Location: index.php");else require_once("navbarLogout.php"); ?>
<br />  
    <div class="container" style="width:1200px;">  
        <h3 align="center" class="display-4">Your Shopping Cart</h3><br />  
        <?php  
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
        $result = mysqli_query($conn, $query);  
        if(mysqli_num_rows($result) > 0)  
        {  
                while($row = mysqli_fetch_array($result))  
                {  
        ?>  
        <div class="col-md-3" style="float:left;">
            <form method="post" action="shoppingcart.php?action=add&id=<?php echo $row["id"]; ?>">  
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                    <img src="images/<?php echo $row["img"]; ?>" class="img-responsive" style="height:150px;width:200px;"/><br />  
                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                    <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                    <input type="text" name="quantity" class="form-control" value="1" />  
                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                </div>  
            </form>  
        </div>  
        <?php  
                }  
        }  
        ?>
        <h3>Order Details</h3>  
        <div class="table-responsive">  
                <table class="table table-bordered">  
                    <tr>  
                        <th width="40%">Item Name</th>  
                        <th width="10%">Quantity</th>  
                        <th width="20%">Price</th>  
                        <th width="15%">Total</th>  
                        <th width="5%">Action</th>  
                    </tr>  
                    <?php   
                    if(!empty($_SESSION["shopping_cart"]))  
                    {  
                        $total = 0; 
                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                        {  
                    ?>  
                    <tr>  
                        <td><?php echo $values["item_name"]; ?></td>  
                        <td><?php echo $values["item_quantity"]; ?></td>  
                        <td>$ <?php echo $values["item_price"]; ?></td>  
                        <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                        <td><a href="shoppingcart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                    </tr>  
                    <?php  
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                        }  
                    ?>  
                    <tr>  
                        <td colspan="3" align="right">Total</td>  
                        <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                        <td></td>   
                    </tr>  
                    <?php  
                    }  
                    ?>  
                </table>  
        </div>  
    </div>  
<br />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>