 
<html>
<head>
<title>portal</title>
</head>
<body bgcolor="grey">
	<?php
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		  // pick the database to use
		   mysql_select_db("zalego",$conn);
		   // create the SQL statement
		$username=$_POST["username"];
		$password=$_POST["password"];
		$sql = "SELECT * FROM customer WHERE username='$username' && password='$password'";
		  // execute the SQL statement
		  $result = mysql_query($sql) or die(mysql_error());
		 //get the number of rows in the result set
		$numofrows=mysql_num_rows($result);
		  
		     if($numofrows==0)
			 {
			 
			  

 $errormessage="<script type='text/javascript'>!--
alert('your username or password is incorrect.try again');
</script>";


include 'login.php'; 

			   echo $errormessage;
			  	
			     
			 }
			 else 
			     {
				

      include 'viewdetails.php';
				 
				 }
			   
			
		 
	?>
</body>
</html>
