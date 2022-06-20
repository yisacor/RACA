<?php 

session_start();
if(isset($_SESSION['username'])){
    
}
else{
    header('location: ./brand.php');
}
session_commit();



$userid = $_SESSION['id'];
$aut = $_SESSION['auth'];

$idd = $_GET['car'];


$conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection

if(isset($_POST['submit'])){
    $cardid = $_POST['cardid'];
    $cardemail = $_POST['cardemail'];
    $cardpassword = $_POST['cardpassword'];
    
    
    $sql2 = "SELECT * FROM visacardsimulator2 WHERE id = '$cardid' AND password ='$cardpassword'";
    $result2 = mysqli_query($conn , $sql2);
   
    if($card = mysqli_fetch_array($result2,MYSQLI_ASSOC)){

        $aut = 'correct';
    }
    else{
         echo 'username or password is incorrect';
         $aut = 'incorrect';
    }
       
    }



$conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection




$sql1 = "SELECT * FROM featured_cars WHERE id = '$idd'";

$result1 = mysqli_query($conn , $sql1);

$featured_cars1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
 


mysqli_close($conn)//closes the connection

// //   //printes the table in the form an array

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="csss/bid.css">
    
    <title>Document</title>
</head>
<body>
<?php
        
    include('header.php');

    ?>
        
        <section id="featuredcars">


<form class="reg-form">


                           <div class="f">
                                
                                <?php foreach ($featured_cars1 as $featured_car1){ ?>
                                    
                               <div class="fcar">
                                   <div class="img"><img src="./img/<?php echo $featured_car1['image']?>"></div>
                                   <div class="price"> <input type="text" placeholder= 'car id :<?php echo $featured_car1['id'];?>' name='car' value='<?php echo $featured_car1['id'];?>' required/></div>
                                   <div class="name"><h1><?php echo $featured_car1['year']; ?> <?php echo $featured_car1['brand']; ?> <?php echo $featured_car1['model']; ?></h1></div>
                                   <div class="price"><h1><?php echo $featured_car1['price']; ?> Birr</h1></div>
                                  <div class="a"><?php  echo "<a href='kk.php?car=".$featured_car1['id']."'>View Car</a>"?></div>
                                  
                               </div>
                               <?php  } ?>
 
                        </div>
                        <div class="p">
                                
                                <?php foreach ($featured_cars1 as $featured_car1){ ?>
                                   
                                    <div class="form-container sign-up-container">
                                    
            <?php 
            if($featured_car1['bid']=="on") { echo "<h1>BID CAR</h1>" ;}
            else{echo "<h1>BUY CAR </h1>";}
            ?>
			        <h1>TERMS AND CONDITIONS</h1>

            <?php 
            if($featured_car1['status'] =='Available'){
            if($aut=='correct'){echo "<div class='a'><a href='bider.php?car=".$featured_car1['id']."&username=".$_SESSION['username']."'>BUY THE CAR</a></div>";}
            elseif($aut=='incorrect'){echo "<div class='i'><input type='submit'  value='INCORRECT inPUT' name='submit' /></div>";}
            else{
            if($featured_car1['bid']=="on") { echo "<div class='a'><a href='autcard.php?car=".$featured_car1['id']."'>BID</a></div>";}
            else{
                echo "<div class='a'><a href='autcard.php?car=".$featured_car1['id']."'>BUY</a></div>";
                }
                
            }}
            else{if($featured_car1['status']=='SOLD') {
                echo 'SUCCSFULLY BOUGHT THE CAR';} }
            ?>
	</div>
                               
                               <?php  } ?>
 
                        </div>

                        </form>
                                
                           </section>  
</body>
</html>