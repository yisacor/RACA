    <?php 
session_start();
$conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection
$idd = $_GET['car'];
$sql12345 = "DELETE FROM featured_cars WHERE `featured_cars`.`id` = '$idd'";
$result234 = mysqli_query($conn , $sql12345);
header('location:./index.php');
?>

        