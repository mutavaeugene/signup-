<?php
session_start();
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    

    $con=mysqli_connect("localhost","root","","zalego");


    if(!$con){
	die('Unable to reach database:' .mysql_error());
}


$sql="INSERT INTO customer (firstname,lastname,username,password) VALUES ('$firstname','$lastname','$username','$password')";

if($con->query($sql)===TRUE){
		$_SESSION['prompt']=("Thank you $firstname for registering with zalego.");
		$_SESSION['COUNT']=1;
	}ELSE{
		$_SESSION['prompt']="sorry!!please try again";
		$_SESSION['COUNT']=1;
	
	
	}
$con->close();
header ('location:login4.php');
?>
<html>
<body bgcolor="crimson">

</body>
</html> 




