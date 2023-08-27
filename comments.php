<?php
include 'includes/connection.php';
if (!session_id()) session_start();
	
$username = $_SESSION['username'];

if(!empty($_POST["comment"])){
	$insertComments = "INSERT INTO comments (Page_ID, name, comment) VALUES ('0', '$username', '".$_POST["comment"]."')";
	mysqli_query($conn, $insertComments) or die("database error: ". mysqli_error($conn));	
	$message = '<label class="text-success">Comment posted Successfully.</label>';
	$status = array(
		'error'  => 0,
		'message' => $message
	);	
} else {
	$message = '<label class="text-danger">Error: Comment not posted.</label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);	
}
echo json_encode($status);
?>