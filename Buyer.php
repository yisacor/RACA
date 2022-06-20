<?php session_start();
$conn = mysqli_connect('localhost','natyk','123' ,'raca');//makes the connection

$idd = $_GET['car'];

$sql1 = "SELECT * FROM featured_cars WHERE id = $idd";

$result = mysqli_query($conn , $sql1); //makes a quray

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database
foreach ($featured_cars as $featured_car){
    $image=$featured_car['image'];
    $id=$featured_car['id'];
    $year=$featured_car['year']; 
    $brand=$featured_car['brand'];  
    $model=$featured_car['model']; 
    $price=$featured_car['price']; 
    $id=$featured_car['id'];
 } 

    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
include('header.php');
?>
 <section id="featuredcars"><div class="header"><h6>WELCOME <?php echo $price ?></h6></div></section >


</body>
</html>