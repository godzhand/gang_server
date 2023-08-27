  <?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username'])) {
if($_POST['type']==1){
$from = $_POST['from'];
$to = trim($_POST['to']);
if (isset($_SESSION['username'])) {
	if ((isset($from) && !empty($from)) && (isset($to))) {
		$username = $_SESSION['username'];
	 $sql = "select * from gangs a, members b where a.id=b.gang_id and b.user='$username'";
   $res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['user'])
			{
			$_SESSION['Gang_Name'] = $row['Gang_Name'];	
			$_SESSION['Gang_ID'] = $row['gang_id'];	
            $_SESSION['isAdmin'] = $row['isAdmin'];
			$_SESSION['isOwner'] = $row['isOwner'];
			$gangid = $_SESSION['Gang_ID'];
			if ($_SESSION['isAdmin'] == True) {
					 $sql3 = "select * from invitations where gang_id='$gangid' AND invite_to='$to'";
                       $res=mysqli_query($conn,$sql3);
 if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
	echo json_encode(array("Username already has invitation"=>201));		
				
 }
 else {
	 
				$NOW = date("Y-m-d H:i:s");
			//echo json_encode(array("Username already exists"=>201));
			  $sql2 = "INSERT INTO invitations (gang_id, invite_to, invite_from, timestamp) VALUES ('$gangid', '$to', '$from', '$NOW')";
if ($conn->query($sql2) === TRUE) {
				echo json_encode(array("statusCode"=>200));
}
			else {
			echo json_encode(array("problem"=>$conn->error));
			}
 }
			}
	 else {
		echo json_encode(array("Username already exists"=>201));
			
	 }	 
			}
			}
 }
	 	mysqli_close($conn);

}
}
}