<?php 
session_start();

if(header('location:./viewcars.php')){
    unset($_SESSION['username']);
    header('location: ./viewcars.php');
}
else
{
    unset($_SESSION['username']);
    header('location: ./index.php');
}
?>