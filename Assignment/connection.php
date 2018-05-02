<?php 
function connectToMySQL(){
    $connection = mysqli_connect("localhost", "root", "", "assignment_db","3307")
        or die('Error connecting to the database');
    return $connection;
}
?>