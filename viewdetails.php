<?php
$user="root";
$pass="";
$db="zalego";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db);
?>

<html>
<head>
<title>Search user by username</title>
</head>
<body  bgcolor="#d0f0f6"style="text-align:center;">


<fieldset>
<P><center>Enter username to check your details</center></p>
<form name="search" method="post" action="viewdetails.php" style="text-align:center;">
username. <input type="text" required="required" name="search" /><input type="submit" name="submit"  value="CHECK ACCOUNT" />
</form>

<?php
if(isset($_POST['submit'])){
	$id=$_POST['search'];


	
	$search_query="SELECT * FROM customer WHERE username='$id'";
	$results=mysqli_query($con,$search_query);
	$results_num=mysqli_num_rows($results);
	
	$out='<table border="1" style="text-align:center;">';
	
	if($results_num>0){
		$out.='<tr><td>'.firstname.'</td><td>'.lastname.'</td><td>'.username.'</td><td>'.password.'</td></tr>';
		while($row=mysqli_fetch_array($results)){			
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$username=$row['username'];	
			$password=$row['password'];	
			
			echo "Dear $firstname your account details are as shown below";
			
			$out.='<tr fontstyle:color="red"><td>'.$firstname.'</td><td>'.$lastname.'</td><td>'.$username.'</td><td>'.$password.'</td></tr>';
		}
		
		$out.='</table>';
		
		echo $out;
		
	}else{		
		echo '<style="text-align:center;font-size:18px; font color:red;">SORRY invalid login.please try again</style>';
		
	}	
}

?>

</fieldset>

</body>
</html>