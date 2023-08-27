<?php
include 'includes/connection.php';
if (!session_id()) session_start();
	if (isset($_SESSION['username'])) {
if($_POST['type']==1){
$user = $_SESSION['username'];
$gamertag = trim($_POST['gamertag']);
$DiscordID = trim($_POST['DiscordID']);
$gender = trim($_POST['gender']);
$website = trim($_POST['website']);
$bio = trim($_POST['bio']);
$color = trim($_POST['color']);
$color = str_replace("#","",$color);
$favemode = trim($_POST['favemode']);
$Avatar = trim($_POST['Avatar']);
	$gamertag = $conn -> real_escape_string($gamertag);
	$DiscordID = $conn -> real_escape_string($DiscordID);
			$website = $conn -> real_escape_string($website);
			$bio = $conn -> real_escape_string($bio);
			$gender = $conn -> real_escape_string($gender);
			$color = $conn -> real_escape_string($color);
			$favemode = $conn -> real_escape_string($favemode);
			$Avatar = $conn -> real_escape_string($Avatar);
		$sql2 = "UPDATE users SET website = '$website', bio = '$bio', gamertag = '$gamertag', DiscordID = '$DiscordID', gender = '$gender', color = '$color', favmode = '$favemode', profile_photo = '$Avatar' WHERE user = '".$user."'";
   if ($conn->query($sql2) === TRUE) {
	   $_SESSION['Avatar'] = $Avatar;
	   echo json_encode(array("statusCode"=>200));
			} 
			else {
				
		 echo json_encode(array("statusCode"=>$conn->error));
			}
			mysqli_close($conn);
		}
}
//echo json_encode(array("statusCode"=>200));