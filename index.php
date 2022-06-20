<?php 
$conn = mysqli_connect('localhost','natyk','123' ,'raca');//makes the connection

session_start();

$sql = 'SELECT * FROM featured_cars';//sql command

$result = mysqli_query($conn , $sql); //makes a quray

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database

mysqli_free_result($result);//clears the buffer that containes the table 
//closes the connection

// print_r($featured_cars); printes the table in the form an array
if(isset($_POST['submit'])){
$idd=$_POST['car'];
$BRAND=$_POST['BRAND'];
$MODEL =  $_POST['MODEL'];
$CONDITION = $_POST['CONDITION'];
$YEAR =  $_POST['YEAR'];
$BODYTYPE = $_POST['BODYTYPE'];
$ENGINE =  $_POST['ENGINE'];
$MILEAGE = $_POST['MILEAGE'];
$TRANSMISSION =  $_POST['TRANSMISSION'];
$GMILEAGE = $_POST['GMILEAGE'];
$PRICE=  $_POST['PRICE'];
$Feature1=  $_POST['Feature1'];
$Feature2=  $_POST['Feature2'];
$Feature3=  $_POST['Feature3'];
$Feature4=  $_POST['Feature4'];
$Feature5=  $_POST['Feature5'];
$imagef =  $_POST['imagef'];
$images =  $_POST['images'];
$imagein =  $_POST['imagein'];
$imagein2 =  $_POST['imagein2'];
$imagetr =  $_POST['imagetr'];
$imageen =  $_POST['imageen'];
$postedby =$_SESSION['username'];
$bidop=  $_POST['bidop'];

$conn = mysqli_connect('localhost','natyk','123' , 'raca');
if($PRICE!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `price` = '$PRICE' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($BRAND!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `brand` = '$BRAND' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($MODEL!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `model` = '$MODEL' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($CONDITION!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `conditionc` = '$CONDITION' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($YEAR!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `year` = '$YEAR' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($BODYTYPE!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `bodytype` = '$BODYTYPE' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($ENGINE!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `enginee` = '$ENGINE' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($TRANSMISSION!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `transmission` = '$TRANSMISSION' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($GMILEAGE!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `gasmileage` = '$GMILEAGE' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($MILEAGE!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `mileage` = '$MILEAGE' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($Feature1!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `Feature1` = '$Feature1' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($Feature2!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `Feature2` = '$Feature2' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($Feature3!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `Feature3` = '$Feature3' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($Feature4!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `Feature4` = '$Feature4' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($Feature5!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `Feature5` = '$Feature5' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($imagef!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `image` = '$imagef' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($images!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `image1` = '$images' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($imagein!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `image2` = '$imagein' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($imagein2!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `image3` = '$imagein2' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($imagetr!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `image4` = '$imagetr' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($imageen!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `image5` = '$imageen' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}
if($bidop!=NULL){
    $sql123 ="UPDATE `featured_cars` SET `bid` = '$bidop' WHERE `featured_cars`.`id` = $idd;";
    $result12 = mysqli_query($conn , $sql123);
}





}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="body.css">
    <link href ="./sk.css" rel="stylesheet">
    <link rel="stylesheet" href="owll.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <title>Charma.com</title>
</head>
                 <body>

                     <!--the top section-->
                     <?php include('header.php')?>

                            <section id ="TOP">
                                <img src="./img/1.jpg">
                                <section id="searchz">


<form action='search.php' method="POST">
<input class="se" type="text" name="search" required>
<input class="sub" type="submit" value="search" name="submit">
</form>
</section>
                                <!-- <div class="tlinkdivision">
                                    <div>
                                        <a href="www.google.com" type="button" class="cta">SELL</a>
                                        <a href="www.google.com" type="button" class="cta">BUY </a>
                                        <a href="www.google.com" type="button" class="cta">RENT</a>
                                    </div>
                            </div> -->

                             </section>
                             
                             
                             <section class="tarea">
                                 <div class="t"><h1>We are delighted that you are here, You came to the right place</h1></div>
                             </section>

                           
                           <section id="brands">

                                <div class="header"> <h1>Brands</h1></div>

                                <div class="items" id="items">
                    
                                       <ul id="autoWidth" >
                                        <div class="owl-carousel owl-theme">
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/toyota.png"><h1>Toyota</h1></a></div></li></div>
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/hyundai.png"><h1>Hyundai</h1></a></div></li></div>
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/bmw.png"><h1>BMW</h1></a></div></li></div>
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/lifan.png"><h1>Lifan</h1></a></div></li></div>
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/Geely.png"><h1>Geely</h1></a></div></li></div>
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/BYD.png"><h1>BYD</h1></a></div></li></div>
                                        <div class="itemm"><li><div class="item"><a href="#"><img src="./images/nissan.png"><h1>Nissan</h1></a></div></li></div>
                                    </ul>
                                </div>

                           </section>

                           <section class="tarea">
                            <div class="t"><h1>WE PROVIDE AFORABLE AND HIGH QULITY VIECHELS</h1><br><h1></h1></div>
                        </section>

                           <section id="featuredcars">
                            <div class="header"><h1>Featured Cars</h1></div>
                           <div class="f">
                           <div class="owl-carousel owl-theme">
                                
                                <?php foreach ($featured_cars as $featured_car){ ?>
                               <div class="fcar">
                               <?php $image = 'image';
                               $id='id'?>
                                   <div class="img"><img src="./img/<?php echo $featured_car['image']?>"></div>
                                   <div class="price"><h1>ID number : <?php echo $featured_car['id'];?>
                                </h1></div>
                                   <div class="name"><h1><?php echo $featured_car['year']; ?> <?php echo $featured_car['brand']; ?> <?php echo $featured_car['model']; ?></h1></div>
                                   <div class="price"><h1><?php echo $featured_car['price']; ?> Birr</h1></div>
                                  <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car['id']."'>View Car</a>"?></div>
                                  
                               </div>
                               <?php } ?>

                                </div>      
                        </div>


                                
                           </section>
                           <section class="tarea">
                                 <div class="t"><h1>Come Check Out Our Cars in Addis</h1></div>
                                 <div class="location"><a href="www.google.com" type="button" class="cta">Location</a></div>
                             </section>
                           <section id="contactus" class="contactus">
                
                           </section>
                </body>
                <script src="jquery.min.js"></script>
                <script src="owl.carousel.min.js"></script>  
                <script>
                $(document).ready(function(){
                    $('.owl-carousel').owlCarousel({
    stagePadding: 25,
    loop:true,
    auto:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
});</script>            
</html>