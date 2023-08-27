<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username'])) {
if($_POST['type']==1){
$gang_name = trim($_POST['gang_name']);
$gang_tag = trim($_POST['gang_tag']);
$gang_motto = trim($_POST['gang_motto']);
$gang_bio = trim($_POST['gang_bio']);
$gang_id = trim($_POST['gang_id']);
$gang_name = $conn -> real_escape_string($gang_name);
$gang_tag = $conn -> real_escape_string($gang_tag);
$gang_motto = $conn -> real_escape_string($gang_motto);
$gang_bio = $conn -> real_escape_string($gang_bio);
$gang_id = $conn -> real_escape_string($gang_id);
if ($_SESSION['isAdmin'] == 'True') {
      if ($_SESSION['Gang_ID'] == $gang_id) {
       		$sql1 = "UPDATE gangs SET Gang_Tag = '$gang_tag', Gang_Bio = '$gang_bio', motto = '$gang_motto' WHERE id = '".$gang_id."'";
 if ($conn->query($sql1) === TRUE) {

echo json_encode(array("statusCode"=>200));
	  }
	  }
}
  }
}