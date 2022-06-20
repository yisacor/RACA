<?php session_start();
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $idd = $_GET['car'];
    $buyer = $_GET['username'];
    $conn = mysqli_connect('localhost','natyk','123' , 'raca');
    
$sql1 = "SELECT * FROM featured_cars WHERE id = '$idd'";
$sql2 = "SELECT * FROM featured_cars";

$result1 = mysqli_query($conn , $sql1);
$result2 = mysqli_query($conn , $sql2);


if($featured_cars1 = mysqli_fetch_all($result1,MYSQLI_ASSOC)){
foreach ($featured_cars1 as $featured_car){
    $image=$featured_car['image'];
    $id=$featured_car['id'];
    $year=$featured_car['year']; 
    $brand=$featured_car['brand'];  
    $model=$featured_car['model']; 
    $price=$featured_car['price']; 
    $id=$featured_car['id'];
    if($featured_car['status']=='Available'){
    
    
    $featured_car['status'] ="SOLD";
    $status = $featured_car['status'];
    $sql12 = "UPDATE `featured_cars` SET `status` = '$status' WHERE `featured_cars`.`id` = '$idd';";
    $sql13 = "UPDATE `featured_cars` SET `soldby` = '$buyer' WHERE `featured_cars`.`id` = '$idd';";
    $result12 = mysqli_query($conn , $sql12);
    $result12 = mysqli_query($conn , $sql13);

    
}

}

}
$featured_cars = mysqli_fetch_all($result2,MYSQLI_ASSOC);

$sql1234 = "SELECT * FROM user";
$result1234 = mysqli_query($conn,$sql1234);
$r = mysqli_fetch_all($result1234,MYSQLI_ASSOC);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href ="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="css/viewcar.css">
</head>
<body>
    <?php include('header.php');?>

    <section id="featuredcars"><div class="header"><h6>WELCOME <?php echo $username ;echo '<br>';echo'<br>';?></h6></div></section >
    <div class="a"><?php  echo "<a href='form.php?userid=".$id."'>POST CAR</a>"?></div>
    <br>
    <div class="header"><h6>BOUGHT CARS</h6></div>
   <?php  if($result1){ ?>
    <div class="f">

    <?php foreach ($featured_cars as $featured_car){if($featured_car['soldby']=="$username") { ?>
                                    
                                    <div class="fcar">
                                        <div class="img"><img src="./img/<?php echo $featured_car['image']?>"></div>
                                        <div class="name"><h1><?php echo $featured_car['year']; ?> <?php echo $featured_car['brand']; ?> <?php echo $featured_car['model']; ?></h1></div>
                                        <div class="price"><h1><?php echo $featured_car['price']; ?> Birr</h1></div>
                                       <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car['id']."'>View Car</a>"?></div>
                                       
                                    </div>
                                    <?php } } ?>
    </div>
      
    <?php } ?>

    <div class="header"><h6>POSTED CARS</h6></div>
   <?php  if($result1){ ?>
    <div class="f">

    <?php foreach ($featured_cars as $featured_car){if($featured_car['postedby']=="$username") { ?>
                                    
                                    <div class="fcar">
                                        <div class="img"><img src="./img/<?php echo $featured_car['image']?>"></div>
                                        <div class="name"><h1><?php echo $featured_car['year']; ?> <?php echo $featured_car['brand']; ?> <?php echo $featured_car['model']; ?></h1></div>
                                        <div class="price"><h1><?php echo $featured_car['price']; ?> Birr</h1></div>
                                       <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car['id']."'>View Car</a>"?></div>
                                      <div class="b"><div class="b"><?php  echo "<a href='edit.php?car=".$featured_car['id']."'>EDIT Car</a>"?></div></div> 
                                    </div>
                                    <?php } } ?>
    </div>
      
    <?php } ?>
<?php foreach ($r as $user) { if($user['type']=="Admin") {?>
    <div class="header"><h6>ADMIN ACCESS</h6></div>
   <?php  if($result1){ ?>
    <div class="f">

    <?php foreach ($featured_cars as $featured_car){ ?>
                                    
                                    <div class="fcar">
                                        <div class="img"><img src="./img/<?php echo $featured_car['image']?>"></div>
                                        <div class="name"><h1><?php echo $featured_car['year']; ?> <?php echo $featured_car['brand']; ?> <?php echo $featured_car['model']; ?></h1></div>
                                        <div class="price"><h1><?php echo $featured_car['price']; ?> Birr</h1></div>
                                       <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car['id']."'>View Car</a>"?></div>
                                      <div class="c"><div class="c"><?php  echo "<a href='delete.php?car=".$featured_car['id']."'>DELETE</a>"?></div></div> 
                                    </div>
                                    <?php  } ?>
    </div>
      
    <?php } ?>
    <?php } }?>
    
</body>
</html>