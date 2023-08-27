<?php
include 'includes/connection.php';
if (!session_id()) session_start();
	if($_POST['type']==1){
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$Avatar = trim($_POST['Avatar']);

if ((isset($username) && !empty($username))  && (isset($email) && !empty($email)) && (isset($password) && !empty($password))) {
  $username = $conn->real_escape_string($_POST['username']);
  $email = $conn->real_escape_string($_POST['email']);
  //$password = $conn->real_escape_string($password);
  $sql = "select * from users where (user='$username' or email='$email')";
  $res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['user'])
            {
                echo json_encode(array("Username already exists"=>201));
            }
            elseif($email==$row['email'])
            {
               echo json_encode(array("email already exists"=>201));
            }
			elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               echo json_encode(array("Invalid Email format"=>201));
}
        }
		
		else {
			
  $sql2 = "INSERT INTO users (user, pass, email, profile_photo) VALUES ('$username', '$password', '$email', '$Avatar')";
   
if ($conn->query($sql2) === TRUE) {
				echo json_encode(array("statusCode"=>200));
			$_SESSION['email']=$email;
			$_SESSION['username']=$username;
			$_SESSION['Avatar']=$Avatar;
			} 
			else {
				echo json_encode(array("statusCode"=>$conn->error));
			}
		}
}
		mysqli_close($conn);
	}
	