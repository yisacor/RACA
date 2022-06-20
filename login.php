<?php 
	$conn = mysqli_connect('localhost','natyk','123' , 'raca');
    if(isset($_POST['submit'])){
        $email = (string)$_POST['signinname'];
		$password = (string) $_POST['inpassword'];
       

        $sql1 = "SELECT * FROM user WHERE id = '$email' AND pasword ='$password'";
        $result1 = mysqli_query($conn , $sql1);

       
        if($r = mysqli_fetch_all($result1,MYSQLI_ASSOC)){
            echo 'success to make a connection';
        }
        else{
            
        }
    }
        


		// $sqllogin="SELECT * FROM `users` WHERE email=$email";
		// $result6 = mysqli_query($conn,$sqllogin);



// //  //makes a quray


//$featured_cars1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
   

	// 	if($LOGED["something"]=="1")
	// {	

	// 	$_SESSION["user_name"]=$username;

	// 	echo "ADMIN";
	// }
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
<form action="login.php" method="POST">
			<h1>Sign in</h1>
			<input type="text"  name="signinname" >
			<input type="password"  name="inpassword" >
			<input type="submit"  value="submit" name="submit" />
		</form>
</body>
</html>