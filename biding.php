<?php 
session_start();
if(isset($_SESSION['username'])){
    
    if($_SESSION['type'] == 'buyer'){
    }
    else{
        header('location: ./brand.php'); 
    }
}
else{
    header('location: ./brand.php');
}


?>
<?php 
$conn = mysqli_connect('localhost','natyk','123' ,'raca');//makes the connection

$sql = 'SELECT * FROM featured_cars';//sql command

$result = mysqli_query($conn , $sql); //makes a quray

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database

mysqli_free_result($result);//clears the buffer that containes the table 

mysqli_close($conn)//closes the connection

// print_r($featured_cars); printes the table in the form an array

?>
<!DOCTYPE html>
<html lang="en">
        
<link rel="stylesheet" href="css/viewcar.css">
<body>
<?php include('header.php');    ?>

        
<section id="featuredcars">
<div class="header"><h6>Bid On Cars</h6></div>

<form class="reg-form">


                           <div class="f">
                                
                                <?php foreach ($featured_cars as $featured_car){if($featured_car['bid']=='on') { ?>
                                    
                               <div class="fcar">
                                   <div class="img"><img src="./img/<?php echo $featured_car['image']?>"></div>
                                   <div class="name"><h1><?php echo $featured_car['year']; ?> <?php echo $featured_car['brand']; ?> <?php echo $featured_car['model']; ?></h1></div>
                                   <div class="price"><h1><?php echo $featured_car['price']; ?> Birr</h1></div>
                                  <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car['id']."'>View Car</a>"?></div>
                                  
                               </div>
                               <?php } } ?>
 
                        </div>

                        </form>
                                
                           </section>  
    
</body>
</html>