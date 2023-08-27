<?php
session_start();
include 'includes/connection.php';
	if($_POST['type']==1){
$username = trim($_POST['username']);
$password = $_POST['password'];

if ((isset($username) && !empty($username))  &&  (isset($password) && !empty($password))) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($password);
    $sql = "select * from users where (user='$username')";
  $res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res) == '1') {
    $logged_in_user = mysqli_fetch_assoc($res);

  // check if entered password matches hash from database
  if(password_verify($password, $logged_in_user['pass'])) {
	   $_SESSION['username'] = $_POST['username'];
	   $_SESSION['Avatar'] = $logged_in_user['profile_photo'];
	   $_SESSION['isGlobalAdmin'] = $logged_in_user['isAdmin'];
   echo json_encode(array("statusCode"=>$_SESSION['isGlobalAdmin']));

    // check if user is admin or user         
   
  //if ($logged_in_user['user_type'] == 'admin') {
  }
  else 
  {
	  echo json_encode(array("wrong PWD"=>201));
  }	  
  }
		
		else {
				echo json_encode(array($password=>$_POST['password']));

		}
}
		mysqli_close($conn);
	}