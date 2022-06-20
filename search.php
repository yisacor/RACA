<?php 
$conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection

session_start();


//closes the connection
if(isset($_POST['submit'])){
    $term = $_POST['search'];
}

$sql = "SELECT * FROM featured_cars where brand = '$term' OR price = '$term' OR year = '$term' OR model = '$term'";//sql command

$result = mysqli_query($conn , $sql); //makes a quray

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database

mysqli_free_result($result);//clears the buffer that containes the table 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="css/viewcar.css">
    <link rel="stylesheet" href="owll.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
</head>

<body>
<?php include('header.php');?>

        
<section id="featuredcars">
<div class="header"><h6>All Cars</h6></div>

<form class="reg-form" method="POST">




                           <div class="f">
                                
                                <?php foreach ($featured_cars as $featured_car){ ?>
                               <div class="fcar">
                                   <div class="img"><img src="./img/<?php echo $featured_car['image']?>"></div>
                                   <div class="name"><h1><?php echo $featured_car['year']; ?> <?php echo $featured_car['brand']; ?> <?php echo $featured_car['model']; ?></h1></div>
                                   <div class="price"><h1><?php echo $featured_car['price']; ?> Birr</h1></div>
                                  <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car['id']."'>View Car</a>"?></div>
                                  
                               </div>
                               <?php } ?>
 
                        </div>

                        </form>
                                
                           </section>  
                                   
    
    
</body>
</html>