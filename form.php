<?php 
session_start();
if(isset($_SESSION['username'])){
    
}
else{
    header('location: ./brand.php');
}
session_commit();

if(isset($_POST['submit'])){
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
$bidop =$_POST['bidop'];
$date = $_POST['date'];
$time = $_POST['time'];

			

$conn = mysqli_connect('localhost','natyk','123' , 'raca');
$sql123 = "INSERT INTO `featured_cars` (`id`, `bid`, `brand`, `model`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `price`, `year`, `status`, `soldby`, `conditionc`, `bodytype`, `enginee`, `transmission`, `mileage`, `gasmilage`, `Feature1`, `Feature2`, `Feature3`, `Feature4`, `Feature5`,`date` ,`start_date` ,`enddate` ,`endtime` ,`postedby`) VALUES (NULL, '$bidop','$BRAND','$MODEL','$imagef','$images','$imagein','$imagein2','$imagetr','$imageen','$PRICE','$YEAR','Available','','$CONDITION','$BODYTYPE','$ENGINE','$TRANSMISSION','$MILEAGE','$GMILEAGE','$Feature1','$Feature2','$Feature3','$Feature4','$Feature5','date','start_date','$date','$time','$postedby');";
$result12 = mysqli_query($conn , $sql123);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Car Registration Form </title>

    <meta name="author" content="Codeconvey" />
    <!-- Student Registration Form CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	
</head>
<body>
<?php include('header.php'); ?>		

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Car Registration Form</h1>
                <p>Please Be careful when filling out this form because it is very hard to correct the data once it has registred.</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
                      <form class="reg-form" action="form.php" method="POST">
        <p class="helper-text">* denotes a required field</p>

        <div class="contain">

            <div class="left">
        <h1>Description</h1>
        <div class="field-row">
            <label class="form-label" for="BRAND" >BRAND</label>
            <input type="text" id="BRAND" class="field text-field first-name-field" name="BRAND" required>
            <span class="message"></span>
        </div>
        <div class="field-row">
            <label class="form-label cf" for="MODEL" >MODEL</label>
            <input type="text" id="MODEL" class="field text-field last-name-field" name="MODEL" required>
            <span class="message"></span>
        </div>
                <div class="field-row">
            <label class="form-label" for="CONDITION" >CONDITION</label>
            <input type="text" id="CONDITION" class="field text-field initials-field" name="CONDITION" required>
            <span class="message"></span>
        </div>                
        <div class="field-row">
            <label class="form-label" for="YEAR" >YEAR</label>
            <input type="text" id="YEAR" name="YEAR" class="field date-field dob-field" min="1900-01-01" max="2015-09-18"  required>
            <span class="message"></span>
        </div>
        
        <div class="field-row">
            <label class="form-label" for="BODYTYPE" >BODY TYPE</label>
            <input type="tel" id="BODYTYPE" name="BODYTYPE" class="field text-field tel-field" required>
            <span class="message"></span>
        </div>               
           <div class="field-row">
            <label class="form-label" for="ENGINE" >ENGINE</label>
            <input type="text" id="ENGINE" name="ENGINE" class="field text-field hs-field" required>
            <span class="message"></span>
        </div>
                          
       <div class="field-row">
            <label class="form-label" for="TRANSMISSION" >TRANSMISSION</label>
            <input type="text" id="TRANSMISSION" name="TRANSMISSION" class="field text-field address-field" required>
            <span class="message"></span>
        </div>   
        <div class="field-row">
            <label class="form-label" for="MILEAGE" >MILEAGE</label>
            <input type="text" id="MILEAGE" name="MILEAGE" class="field text-field email-field" required>
            <span class="message"></span>
        </div>
        <div class="field-row">
            <label class="form-label" for="GMILEAGE" >GAS-MILEAGE</label>
            <input type="text" id="GMILEAGE" name="GMILEAGE" class="field text-field email-field" required>
            <span class="message"></span>
        </div>
            <div class="field-row">
            <label class="form-label" for="PRICE" >PRICE</label>
            <input type="text" id="PRICE" name="PRICE" class="field text-field email-field" required>
            <span class="message"></span>
</div>
                        </div>
<div class="right">
                            <h1>Features</h1>
                            <div class="field-row">
            <label class="form-label" for="Feature1" >Feature-1</label>
            <input type="text" id="Feature1" name="Feature1" class="field text-field email-field" required>
            <span class="message"></span>
</div><div class="field-row">
            <label class="form-label" for="Feature2" >Feature-2</label>
            <input type="text" id="Feature2" name="Feature2" class="field text-field email-field" required>
            <span class="message"></span>
</div><div class="field-row">
            <label class="form-label" for="Feature3" >Feature-3</label>
            <input type="text" id="Features3" name="Feature3" class="field text-field email-field" required>
            <span class="message"></span>
</div><div class="field-row">
            <label class="form-label" for="Feature4" >Feature-4</label>
            <input type="text" id="Feature4" name="Feature4" class="field text-field email-field" required>
            <span class="message"></span>
</div><div class="field-row">
            <label class="form-label" for="Feature5" >Feature-5</label>
            <input type="text" id="Feature5" name="Feature5" class="field text-field email-field" required>
            <span class="message"></span>
</div>
                                            </div>
                        </div>
                        <div class="field-row">
                        <label class="form-label" for="bidop">BID OPTION </label>
</div>
                        <div class="field-row">
                        <select id="bidop" class="form-button" name="bidop">
                            <option value="on">BID ON</option>
                            <option value="off">JUST SELL(no-biding)</option>
                        </select>
                        <input type='date' name='date'>
                        <input type='time' name='time'>
</div>
                        <div class="image">
                            <h1>images</h1>
                            <div class="in"><label for="front">front</label>
                            <input type="file" name="imagef" id="front"></div>
                            <div class="in"><label for="side">side</label>
                            <input type="file" name="images" id="side"></div>
                            <div class="in"><label for="inside">inside</label>
                            <input type="file" name="imagein" id="inside"></div>
                            <div class="in"><label for="inside2">inside 2</label>
                            <input type="file" name="imagein2" id="inside2"></div>
                            <div class="in"><label for="trunk">trunk</label>
                            <input type="file" name="imagetr" id="trunk"></div>
                            <div class="in"><label for="engine">engine</label> 
                            <input type="file" name="imageen" id="engine"></div>
                        <div class="field-row">
                            <label class="form-label"></label>
                            <button class="form-button" name="submit">Register</button>
                        </div>
                        </div>
                        
    
    </form>
   <!-- End Student Registration Form -->
                  
    		
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>