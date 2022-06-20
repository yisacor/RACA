<?php 

session_start();
if(isset($_SESSION['username'])){
    
}
else{
    header('location: ./brand.php');
}
session_commit();


$idd = $_GET['car'];



 $conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection

$sql = 'SELECT * FROM featured_cars';//sql command

$sql1 = "SELECT * FROM featured_cars WHERE id = $idd";


$result = mysqli_query($conn , $sql);
// //  //makes a quray
$result1 = mysqli_query($conn , $sql1);

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database
$featured_cars1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
mysqli_free_result($result);//clears the buffer that containes the table 
//print_r($featured_cars1);

mysqli_close($conn)//closes the connection

// //   //printes the table in the form an array

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./otherpage.css">
    <title>Document</title>
</head>
<body>
    <?php

foreach ($featured_cars1 as $featured_car1){ 
        
        
    include('header.php');

    ?>
     <section class="display">
        
        <div class="hold">
            <div class="slide">   
                <?php echo "CAR ID : $idd " ?>     
                <input type="radio" name="ck" id="slider1" >
                <input type="radio" name="ck" id="slider2" checked>
                <input type="radio" name="ck" id="slider3">
                <input type="radio" name="ck" id="slider4">
                <input type="radio" name="ck" id="slider5">
                <input type="radio" name="ck" id="slider6">
                <label for="slider2" class="slider b"><img src="./img/<?php echo $featured_car1['image1']?>" alt=""></label>
                <label for="slider4" class="slider f"><img src="./img/<?php echo $featured_car1['image']?>" alt=""></label>
                <label for="slider1" class="slider a"><img src="./img/<?php echo $featured_car1['image2']?>" alt=""></label>
                <label for="slider5" class="slider d"><img src="./img/<?php echo $featured_car1['image3']?>" alt=""></label>
                <label for="slider5" class="slider e"><img src="./img/<?php echo $featured_car1['image4']?>" alt=""></label>
                <label for="slider6" class="slider p"><img src="./img/<?php echo $featured_car1['image5']?>" alt=""></label>
                
                
               
                
            </div>
            <div class="v">
            <div class="content">
                <div class="content1" action="#"><img src="./img/<?php echo $featured_car1['image2']?>" alt=""></div>
                <div class="content2" action="#"><img src="./img/<?php echo $featured_car1['image1']?>" alt=""></div>
                <div class="content3" action="#"><img src="./img/<?php echo $featured_car1['image']?>" alt=""></div>
                <div class="content4" action="#"><img src="./img/<?php echo $featured_car1['image3']?>" alt=""></div>
                <div class="content5" action="#"><img src="./img/<?php echo $featured_car1['image4']?>" alt=""></div>
                <div class="content6" action="#"><img src="./img/<?php echo $featured_car1['image5']?>" alt=""></div>
            </div>
        </div>
        </div>
        <div class="description">
            <div class="f"><h1>Description</h1></div>
            <div class="d">
            <ul>
             <li>BRAND : <?php echo $featured_car1['brand']?></li>   
            <li>MODEL : <?php echo $featured_car1['model']?> </li>
            <li>YEAR  : <?php echo $featured_car1['year']?> </li>
            <li><span>Condition</span> : <?php echo $featured_car1['conditionc']?></li>
            <li><span>Body Type</span> : <?php echo $featured_car1['bodytype']?></li>
            <li><span>Engine</span> : <?php echo $featured_car1['enginee']?></li>
            <li> <span>Transmission</span>  : <?php echo $featured_car1['transmission']?></li>
            <li> <span>Mileage</span>  : <?php echo $featured_car1['mileage']?></li>
            <li> <span>Gas Mileage</span>  : <?php echo $featured_car1['gasmilage']?></li>
            <li> <span>Plate No.</span>  : B9xxxx Code 2</li>
            <li> <span>PRICE</span> : <?php echo $featured_car1['price']?></li>
            <?php 
            if($featured_car1['status']=="Available"){
            if($featured_car1['bid']=="on") { echo "<a href='bidcar.php?car=".$featured_car1['id']."'>BID</a>" ;}
            else{echo "<a href='bidcar.php?car=".$featured_car1['id']."'>BUY</a>";}}
            else{
                echo "<h4>THIS CAR IS SOLD</h4>";
            }
            ?>
            <div class="f"><h1>Features</h1></div>
            <div class="fc">
            <li><?php echo $featured_car1['Feature1']?></li>
            <li><?php echo $featured_car1['Feature2']?></li>
            <li><?php echo $featured_car1['Feature3']?></li>
            <li><?php echo $featured_car1['Feature4']?></li>
            <li><?php echo $featured_car1['Feature5']?></li></div>

            
        </ul>
        </div>
        </div>
     </section>
     <!-- <section class="vendor">
     <div class="c">
            <div class="vendor">
                <div class='img'><img src="./images/CHARMA.png" alt=""></div>
                <h6>Vendor name</h6>
            </div>
            <div class='cardescription'>

                   <div class='cheader'><h2>car description</h2></div> 
                   <div class="description-space">
                       <h5>this car is new and comes with Excellent service and Insurance and we offer to reduce the price down 10% if you are able to buy with in 3days</h5>
                   </div>

            </div>
            </div>
            <div class="left">
            <div class="chat">
                <h1>Chat with our built-in app</h1>
                <button>Chat</button>
                <button>Save Car</button>
            </div>
            <div class="cinfo">
                <h1>Contact Vendor</h1>
                <a href="#">Call on +25190000000</a>
                <a href="#">Contact on Facebook</a>
                <a href="#">Message on Telgram</a>
                <a href="#">Use whats app</a>
            </div>
</div>
            
     </section> -->
     <?php } ?>
</body>
<script> 
    const content1 = document.querySelector(".content1");
    const content2 = document.querySelector(".content2");
    const content3 = document.querySelector(".content3");
    const content4 = document.querySelector(".content4");
    const content5 = document.querySelector(".content5");
    const slider1 = document.querySelector("label.a");
    const slider2 = document.querySelector("label.b");
    const slider3 = document.querySelector("label.f");
    const slider4 = document.querySelector("label.d");
    const slider5 = document.querySelector("label.e");

    slider1.onclick =(()=>{
      content1.style.display ="block";
      content2.style.display = "none";
      content3.style.display = "none";
      content4.style.display = "none";
      content5.style.display = "none";
      content6.style.display = "none";
    })
    slider2.onclick = (()=>{
      content1.style.display ="none";
      content2.style.display = "block";
      content3.style.display = "none";
      content4.style.display = "none";
      content5.style.display = "none";
      content6.style.display = "none";
    });
    slider3.onclick = (()=>{
      content1.style.display ="none";
      content2.style.display = "none";
      content3.style.display = "block";
      content4.style.display = "none";
      content5.style.display = "none";
      content6.style.display = "none";
    });
    slider4.onclick = (()=>{
      content1.style.display ="none";
      content2.style.display = "none";
      content3.style.display = "none";
      content4.style.display = "block";
      content5.style.display = "none";
      content6.style.display = "none";
    });
    slider5.onclick = (()=>{
      content1.style.display ="none";
      content2.style.display = "none";
      content3.style.display = "none";
      content4.style.display = "none";
      content5.style.display = "block";
      content6.style.display = "none";
    });
    slider6.onclick = (()=>{
      content1.style.display ="none";
      content2.style.display = "none";
      content3.style.display = "none";
      content4.style.display = "none";
      content5.style.display = "none";
      content6.style.display = "block";
    });
</script>
</html>