<?php 
$conn = mysqli_connect('localhost','natyk','123' , 'raca');//makes the connection

session_start();



if(isset($_POST['submit'])){
    $brand = $_POST['brand'];
    $year = $_POST ['year'];
    $condition = $_POST['condition'];
    
    $term = NULL;
    
$sql = "SELECT * FROM featured_cars where brand = '$brand' AND year = '$year' AND conditionc = '$condition'";//sql command

$result = mysqli_query($conn , $sql); //makes a query

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
else{
    
$sql = 'SELECT * FROM featured_cars';//sql command

$result = mysqli_query($conn , $sql); //makes a quray

$featured_cars = mysqli_fetch_all($result,MYSQLI_ASSOC);// featch the data from the database

}
//closes the connection

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


<form class="reg-form" action="viewcars.php" method="POST">
    <div class="org"><select name="brand" id="brand">
    <option value="TOYOTA">TOYOTA</option>
    <option value="LIFAN">LIFAN</option>
</select>
<select name="year" id="year">
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2022">2019</option>
    <option value="2021">2018</option>
    <option value="2020">2017</option>
    <option value="2022">2016</option>
    <option value="2021">2015</option>
    <option value="2020">2014</option>
    <option value="2022">2013</option>
    <option value="2021">2012</option>
    <option value="2020">2010</option>
    <option value="2022">2009</option>
    <option value="2021">2008</option>
    <option value="2020">2007</option>
</select>

<select name="bodytype" id="bodytype">
    <option value="SUV">SUV</option>
    <option value="SEDAN">SEDAN</option>
</select>
<select name="price" id="price">
    <option value="5000000">morethan 5,000,000</option>
    <option value="2500000">2,500,000 - 5,000,000 </option>
    <option value="1000000">1,000,000 - 2,500,000</option>
    <option value="100000">100,000 - 1,000,000</option>

</select>
<select name="condition" id="condition ">
    <option value="NEW">NEW</option>
    <option value="USED">USED</option>
</select>

</div>
    <div class="filter"> <input type="submit" value='submit' name='submit'> </div>
</form>

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