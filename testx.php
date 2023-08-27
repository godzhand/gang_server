<?php
	include 'includes/connection.php';
	if (!session_id()) session_start();
	if($_POST['type']==1){
$id = trim($_POST['username']);
$password = trim($_POST['password']);
if ((isset($id) && !empty($id))  &&  (isset($password) && !empty($password))) {
  $id = $conn->real_escape_string($id);
  $password = $conn->real_escape_string($password);
$sql = "SELECT * FROM users WHERE user=?";
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $username = $row['user'];
    $pass = $row['pass'];
    $Avatar = $row['profile_photo'];
	$isAdmin = $row['isAdmin'];
	
}
if (!isset($username)) {
 echo json_encode(array("invalid username"=>201));
}
elseif (!isset($pass)) {
 echo json_encode(array("invalid pass"=>201));
}
else {
 if(password_verify($password, $pass)) {
	 $_SESSION['username'] = $username;
	 $_SESSION['Avatar'] = $Avatar;
	 $_SESSION['isGlobalAdmin'] = $isAdmin;
	 $array['Member'] = array
(
  'username' => $username,
  'Avatar' => $Avatar
);
$json = json_encode($array, JSON_PRETTY_PRINT);
	 echo $json;
	 //echo json_encode(array("statusCode"=>200));
 }
 else {
	echo json_encode(array("wrong PWD"=>201));
 }
}
//else { 
//echo $username . $pass;
//}
}
	}