<?php 
	$conn = mysqli_connect('localhost','natyk','123' , 'raca');
    if(isset($_POST['submit'])){
        $email = $_POST['signinname'];
		$password =  $_POST['inpassword'];
       

        $sql1 = "SELECT * FROM user WHERE email = '$email' AND password ='$password'";
        $result1 = mysqli_query($conn , $sql1);
		session_start();

       
        if($r = mysqli_fetch_array($result1,MYSQLI_ASSOC)){

            $_SESSION['username'] = $r['username'];
			$_SESSION['type'] = $r['type'];
			$_SESSION['id'] = $r['id'];
			$_SESSION['auth'] = 'none';
			header('location: ./index.php');
        }
        else{
            echo 'username or password is incorrect';
        }
    }
	if(isset($_POST['signupsubmit'])){
        $email = $_POST['signupemail'];
		$password =  $_POST['signuppassword'];
		$username = $_POST['signupusername'];
		$type = $_POST['type'];
       

        $sql12 = "INSERT INTO `user` (`email`, `username`, `password`, `id`, `type`) VALUES ('$email', '$username', '$password', '', '$type');";
        $result12 = mysqli_query($conn , $sql12);

       
        if($result12){
            echo 'succesfully created a user enjoy ';
			header('location: brand.php');
			echo 'succesfully created a user enjoy ';

        }
        else{
            echo 'username or password is incorrect';
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
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="brand.php" method='POST'>
			<h1>Create Account</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span> -->
			<input type="text" placeholder="Name" name='signupusername' required/>
			<input type="email" placeholder="Email" name='signupemail' required/>
			<input type="password" placeholder="Password" name='signuppassword' required />
			<select name="type" id="type">
				<option value="buyer">Buyer</option>
				<option value="seller">Seller</option>
				<option value="Admin">Admin</option>
			</select>
			<div class='i'><input type="submit"  value="Sign Up" name="signupsubmit"  /></div>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="brand.php" method="POST">
			<h1>Sign in</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your account</span> -->
			<input type="email"  name="signinname" required/>
			<input type="password"  name="inpassword" required/>
			<a href="#">Forgot your password?</a>
			<div class='i'><input type="submit"  value="Sign in" name="submit"  /></div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>Login and check out on any recent activity in your Account </p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Friend!</h1>
				<p>You found the right place to buy cars, signup and join us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


</body>
<script>const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    
    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });</script>
</html>