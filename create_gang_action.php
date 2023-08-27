<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username'])) {
if($_POST['type']==1){
$owner = $_SESSION['username'];
$gang_name = trim($_POST['gang_name']);
$gang_tag = trim($_POST['gang_tag']);
$gang_motto = trim($_POST['gang_motto']);
$gang_bio = trim($_POST['gang_bio']);

if ((isset($owner) && !empty($owner)) && (isset($gang_name) && !empty($gang_name)) && (isset($gang_tag) && !empty($gang_tag)) && (isset($gang_motto) && !empty($gang_motto)) && (isset($gang_bio) && !empty($gang_bio))) {
  $username = $conn->real_escape_string($owner);
  //$password = $conn->real_escape_string($password);
  $sql = "select * from gangs where (owner='$username' or Gang_Name='$gang_name')";
  $res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['owner'])
            {
                echo json_encode(array("You already own a gang."=>201));
            }
            elseif($gang_name==$row['Gang_Name'])
            {
               echo json_encode(array("This gang already exists"=>201));
            
        }
		//elseif($gang_tag==$row['Gang_Tag'])
		//{
		 //echo json_encode(array("This clan tag is already used"=>201));
		
	//	}
 }
		else {
			
			$gang_bio = $conn -> real_escape_string($gang_bio);
			$gang_tag = $conn -> real_escape_string($gang_tag);
			$gang_motto = $conn -> real_escape_string($gang_motto);
			//Thanks to  {bw} x1extreme1x for finding this gang creation error!
		 $sql2 = "INSERT INTO gangs (Gang_Name, owner, Gang_Tag, Gang_Bio,  Gang_Wins,  Gang_Losses, Members, motto) VALUES ('$gang_name', '$owner', '$gang_tag', '$gang_bio', '0', '0', '1', '$gang_motto')";
   
if ($conn->query($sql2) === TRUE) {
	        //printf("New record has ID %d.\n", $conn->insert_id);
			$sql3 = "INSERT INTO members (gang_id, user, isAdmin, isOwner) VALUES ('$conn->insert_id','$owner','True', 'True')";
		if ($conn->query($sql3) === TRUE) {
			echo json_encode(array("statusCode"=>200));
			} 
      }
			else {
				
		 echo json_encode(array("statusCode"=>$conn->error));
			}
		}
}
//echo json_encode(array("statusCode"=>200));
		mysqli_close($conn);
	}
	}