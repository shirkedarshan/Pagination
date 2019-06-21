<!--<?php
//echo "you are in admin file";
//echo "<br>";
 ?>-->

<?php
 //This gets all the information from the form
$prod_name = $_REQUEST['prod_name'];
$city = $_REQUEST['prod_name'];
$prod_type = $_REQUEST['prod_type'];
$brand_type = $_REQUEST['prod_type'];
$file = $_FILES['file']['name'];
$descr = $_REQUEST['prod_descr'];
$cost = $_REQUEST['cost'];



move_uploaded_file($_FILES['file']['tmp_name'],"pics/".$_FILES['file']['name']);


//create connect and select db
$con = mysqli_connect('localhost','root','','page') or
die(mysqli_connect_error()) or die(mysqli_error($con));


//insert query
$sql = "INSERT INTO product(prod_name,city,prod_type,brand_type,file,prod_descr,cost) values ('$prod_name','$city','$prod_type','$brand_type','$file','$descr','$cost')";

//fire query
mysqli_query($con,$sql) or die(mysqli_error($con));

$sql1 = "select * from product where prod_name = '$prod_name'";



$result=mysqli_query($con,$sql1) or die(mysqli_error($con));

if (mysqli_num_rows($result) == 1) {
	
		echo "<div style='text-align:center;position:absolute;left:575px;top:250px;'>";
		  echo "Product Inserted Successfully<br>";
		  echo "To Insert Another Product <a href = 'addproduct.html'>Click Here</a>";
		  echo "<br>";
		  echo "for Home Page<a href='index.php'>Click Here</a>";
		echo "</div>";
}else {
	echo "<div style='text-align:center;position:absolute;left:600px;top:250px;'>";
	echo mysqli_error($con);
	echo '</div>';
}

mysqli_close($con);
?>
