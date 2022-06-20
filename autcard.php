<?php 
session_start();
$conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection
$aut = $_SESSION['auth'];
$idd = $_GET['car'];

if(isset($_POST['submit'])){
    $cardid = $_POST['cardid'];
    $carid = $_POST['car'];
    $cardemail = $_POST['cardemail'];
    $cardpassword = $_POST['cardpassword'];
    
    
    $sql2 = "SELECT * FROM visacardsimulator2 WHERE id = '$cardid' AND password ='$cardpassword'";
    $result2 = mysqli_query($conn , $sql2);
   
    if($card = mysqli_fetch_array($result2,MYSQLI_ASSOC)){

        $_SESSION['auth'] = 'correct';
       
        $_SESSION['cardid'] =$card['id'];

        $_SESSION['cardbalance']=$card['balance'];
    }
    else{
         echo 'username or password is incorrect';
         $_SESSION['auth'] = 'incorrect';
    }
       
    }

	

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./e.css">
</head>
<body>

 
<form action="autcard.php" method='POST'>
    
            <input type="text" placeholder="CAR ID" name='car' required />
			<input type="text" placeholder="CARD ID" name='cardid' required/>
			<input type="email" placeholder="Email" name='cardemail' required/>
			<input type="password" placeholder="Password" name='cardpassword' required />
            
            
           <?php if($_SESSION['auth']=='correct'){echo "<div class='i'><a href='bidcar.php?car=".$carid."'>SUBMIT</a></div>";}
            elseif($_SESSION['auth']=='incorrect'){echo "<div class='i'><input type='submit'  value='id or password incorrect' name='submit' /></div>";}
            else{
             echo "<div class='i'><input type='submit'  value='BID' name='submit' /></div>";}
            ?>
		</form>
        
        
</body>
</html>