<?php 
$conn = mysqli_connect('localhost','natyk','123' ,'raca');//makes the connection

session_start();

$sql = 'SELECT * FROM featured_cars';//sql command

$result = mysqli_query($conn , $sql); //makes a quray

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database

mysqli_free_result($result);//clears the buffer that containes the table 

mysqli_close($conn)//closes the connection

// print_r($featured_cars); printes the table in the form an array

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="body.css">
    
    <link rel="stylesheet" href="owll.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <title>Charma.com</title>
</head>
                 <body>

                     <!--the top section-->
                     <?php include('header.php')?>

  


    
                            <section id ="TOP">
                                

    



                                <img src="./img/1.jpg">
                                <!-- <div class="tlinkdivision">
                                    <div>
                                        <a href="www.google.com" type="button" class="cta">SELL</a>
                                        <a href="www.google.com" type="button" class="cta">BUY </a>
                                        <a href="www.google.com" type="button" class="cta">RENT</a>
                                    </div>
                            </div> -->

                             </section>
<section id="searchz">


<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
</form>


<?php
$con = new PDO("mysql:host=localhost;dbname=raca",'root','');
if (isset($_POST["submit"])) {
$str = $_POST["search"];
$sth = $con->prepare("SELECT * FROM 'search' WHERE Name = '$str'");

$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth -> execute();

if($row = $sth->fetch())
{
<br><br><br>
<table>
<tr>
<th>Name</th>
<th>Description</th>
</tr>
<tr>
<td><?php echo $row->Name; ?>?</td>
<td><?php echo $row->Description; ?>?</td>
</tr>

</table>

}
?>
<?php
else{
echo "Name does not exist";
}
}
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