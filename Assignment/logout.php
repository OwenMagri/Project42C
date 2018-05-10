<?php 
    session_start();
    $_SESSION = array();//unset all
    session_destroy();
    header("Location: index.php");
?>