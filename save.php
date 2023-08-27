<?php
	include 'includes/connection.php';
	session_start();
	if($_POST['type']==1){
		$name=mysql_real_escape_string($_POST['name']);
		$email=mysql_real_escape_string($_POST['email']);
		$phone=mysql_real_escape_string($_POST['phone']);
		$city=mysql_real_escape_string($_POST['city']);
		$password=mysql_real_escape_string($_POST['password']);
		
		$duplicate=mysqli_query($conn,"select * from crud where email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`, `password`) 
			VALUES ('$name','$email','$phone','$city', '$password')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}
	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from crud where email='$email' and password='$password'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email']=$email;
			$_SESSION['username']=$username;
			
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>