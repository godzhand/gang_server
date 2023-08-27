  <?php
include 'includes/connection.php';
	session_start();
if (isset($_SESSION['username'])) {
			$username = $_SESSION['username'];
	if ((isset($_POST['type']) && !empty($_POST['type'])) && (isset($_POST['to']) && !empty($_POST['to'])) && (isset($_POST['from']) && !empty($_POST['from'])) && (isset($_POST['gangid']) && !empty($_POST['gangid']))) {
	if($_POST['type'] == 1){
	    $to = $_POST['to'];
		$from = $_POST['from'];
		$gangid = $_POST['gangid'];
		if (isset($_SESSION['Gang_ID'])) {
		$gangidx = $_SESSION['Gang_ID'];
		}
		if ($username == $to) { 
$sql1 = "DELETE from invitations WHERE invite_to='$to' AND invite_from='$from'";
if ($conn->query($sql1) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo "<script>$('.menuitems').load('invites.php');</script>";
		}
	}
	}
}