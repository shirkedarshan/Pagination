<html>
<span style="float:left"><b><h1>Products.com</h1></b></span>
<head>
<title>Welcome</title>

<style type="text/css">
.style1{
	width:180px;
}
</style>

<script type="text/javascript">
		
		function suggest(value)
		{	
			var xmlhttp= new XMLHttpRequest();
			
			xmlhttp.open("GET","keyword.php?keyword="+value,true);
			xmlhttp.send();
			
			xmlhttp.onreadystatechange=function()
			{	
				if(xmlhttp.readyState==4)
				{	
					document.getElementById('response').innerHTML=xmlhttp.responseText;
					console.log("Data" +xmlhttp.responseText);
				}
			}
			
		}

	</script>

</head>

<header>
</header>

<?php

$page_limit=2;
	/////////////////////////////////////
	echo '<span style="font-size:20px;font-family:Comic Sans MS;float:right;padding-right:8px">
	<b><h3>	
	<a href="index.php"><button><img src="pics/home.png"width="30" height="30" "></button></a>	
	&nbsp; &nbsp; 
		
	<a href="addproduct.html">Admin Panel</a>
	</h3></b>
	</span>';

	echo"<br><br>";
	echo"<br><br><br>";
	echo'<div style="border-bottom:1px solid black;"></div><br>';
	
//////////////////////////////////////////////
/*
echo'<div style="border:1px solid black;font-size:20px;font-family:Comic Sans MS;float:left;padding:8px">';
	
	echo '<div>';
	echo 'Search Keywords:<input list="keyword" name="keyword" placeholder="Search" onkeyup="suggest(this.value)"/>';
	echo '</div>';
	/////////////
	
	echo '<div style="float:right"><select>';
	echo "<option id='response'></option>";
    echo '</select>  
	</div>';
	//////////////	
	echo "</div><br>";

	echo"<br><br>";
	
*/	
	//////////////////////////////////////////////
	
	
	

//////////////connection
	$con = mysqli_connect('localhost','root',''); //The Blank string is the password
	mysqli_select_db($con,'page') or die(mysqli_error($con)) ;

	$query = "SELECT * FROM product"; //You don't need a ; like you do in SQL
	$result = mysqli_query($con,$query);

	
//echo "test 1";
	
if(isset ($_GET['page_no']))
	{
	$page_no=$_GET['page_no'];
	}
	else{
	$page_no='1';
	}
///////////////			DECLARATION	
	
$total_prod= mysqli_num_rows($result) ;


$total_pages = ($total_prod/$page_limit);// Calc for Total No of pages
$total_pages = ceil($total_pages);


/////////////////////////////////////////////////
$ini_lim =( ( $page_no - 1)*$page_limit );
//echo "test 2";


$count=0;


$query1 = "SELECT * FROM product LIMIT $ini_lim,$page_limit"; 
	$result1 = mysqli_query($con,$query1);
	
	//echo "test 3";
		
	//echo "test 4";
	echo "<table>";
//echo "<div style='float:left'>";
while($row = mysqli_fetch_assoc($result1)){   //Creates a loop to loop through results


	//echo "test 5";
			$prod_id=$row['prod_id']; 

		echo "<td>";
		echo "<fieldset class='style1'>";

			echo "<div style='font-family:Comic Sans MS;'>";
				
				echo $row['prod_name'];
			
			echo "</div>";
			
			echo "<br>";
			//Passing information through hidden tag

			echo '<img src="pics/'.$row['file'].'"width="120" height="160" ">';

			echo "<br></br>";
			echo "Rs: ".$row['cost'];
			echo "<br>";

		echo "</fieldset>";
		echo "</td>";

			$count++;
			if($count==3){$count=0;echo"</tr>";}
	}
//echo"</div>";
echo "<div>";

if($page_no!=1){
echo"<a href='index.php?page_no=".($page_no-1)."'>prev</a>";
echo "&nbsp";
echo "&nbsp";
}

for($i=1;$i<=$total_pages;$i++)
{
	echo"&nbsp<a href='index.php?page_no=".$i."'>$i</a>";
	echo "&nbsp";
	echo "&nbsp";
	}

	
if($page_no != $total_pages){
echo"<a href='index.php?page_no=".($page_no+1)."'>next</a>";
}

echo "</table>";
mysqli_close($con);
	
	?>