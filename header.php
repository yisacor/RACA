<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="owll.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link rel="stylesheet" href="./csss/header.css">
    
    <title>Charma.com</title>
</head>
<nav>
                        <div class="text"><a href="index.php">
                            <img src="./img/logo2.png">
                            </a>
                        </div>
                        <div class="navbar">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="biding.php">BID CARS</a></li>
                            <li><a href="viewcars.php">VIEWS CARS</a></li>
                            <li><a href="aboutus.php">ABOUT US</a></li>
                            <li><a href="contactus.php">CONATCT US</a></li>
                        </ul> 
                    </div>
                    <div class="log">
                        <?php 
                        if(isset($_SESSION['username'])){
                            $username = $_SESSION['username'];
                            $id = $_SESSION['id'];
                            echo "<div class='na'><a href='bider.php?car=".$id."&username=".$username."'>$username</a></div>";
                            echo '<br><div class="na"><a href="logout.php">LOGOUT</a></div>';
                        }
                        else{
                            echo '
                    <div class="l"> <a href="brand.php">Log in</a></div>
                    <div class="s"> <a href="brand.php #signup">Sign up</a></div>';
                        }
                    ?>
                    </div>
                     </nav>
