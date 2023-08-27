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
	 	 $sql = "select * from invitations where invite_to='$username' AND invite_from='$from'";
		  $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res) == 1) {
			while ($row = $res->fetch_assoc()) {
		$gang_to_id = $row['gang_id'];
			}
		 $sql2 = "select * from members where user='$username'";
		 
		 $res2=mysqli_query($conn,$sql2);
		 if(mysqli_num_rows($res2) == 0) { 
		 
		 $sql5 = "INSERT INTO members (gang_id, user, isAdmin, isOwner) VALUES ('$gangid','$to','False','False')";
 if ($conn->query($sql5) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql6 = "DELETE from invitations WHERE invite_to='$to' AND invite_from='$from'";
if ($conn->query($sql6) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo "<script>$('.menuitems').load('gangs.php');</script>";
		 }		 
        else if (mysqli_num_rows($res2) == 1) {
			while ($row = $res2->fetch_assoc()) {
			 $_SESSION['isOwner'] = $row['isOwner'];
			 $_SESSION['isAdmin'] =  $row['isAdmin'];
			 $_SESSION['gang_id'] =  $row['gang_id'];
			 $gangidx = $_SESSION['gang_id'];
			}
		if ($_SESSION['isOwner'] == 'True') { 
			$sql3 = "SELECT *
				FROM members a, gangs b
				WHERE a.gang_id = b.id AND b.id=$gangidx";
	        $stmt = $conn->prepare($sql2); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result2 = $stmt->get_result();
$number_of_members = $result2->num_rows;
		$result2=mysqli_query($conn,$sql3);;
				 if (mysqli_num_rows($result2) == 1) {
				while ($row = $result2->fetch_assoc()) {
 echo "You are already owner of A Gang<br>Would you like to leave ";
 echo $row['Gang_Name'];
  $Gang_out = $row['Gang_Name'];
				}
				echo " and join ";
		 $sql4 = "SELECT Gang_Name from gangs where id=$gang_to_id";
				  $stmt = $conn->prepare($sql4); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result2 = $stmt->get_result();
$number_of_members = $result2->num_rows;
		$result2=mysqli_query($conn,$sql4);;
				 if (mysqli_num_rows($result2) == 1) {
				while ($row = $result2->fetch_assoc()) {
					echo $row['Gang_Name'];
					$Gang_in = $row['Gang_Name'];
				}
				 }
				 echo "<br> 
		<button class='' type='button' id='leavegang2'>Yes</button>
        <button class='' type='button' id='cancelleavegang'>No</button><br>";
		echo $Gang_out;
        echo " will be destroyed
		<script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang2').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 2,
					to: '$to',
					from: '$from',
					gangid: '$gangid',
					gang_out: '$Gang_out',
					gang_in: '$Gang_in',
					Destroy_Gang: 'True'
				},
                url: 'gang_invite_accept_action.php',
                success: function(data) {
                     $('#invitations').html(data);

                }
            });
   });
});</script>";		
 }
 	 else if (mysqli_num_rows($result2) == 2) {
				while ($row = $result2->fetch_assoc()) {
					if ($username != $row['user']) { 
 echo "You are already owner of A Gang<br>Would you like to leave ";
 echo $row['Gang_Name'];
  $Gang_out = $row['Gang_Name'];
  $successor = $row['user'];
				}
				}
				echo " and join ";
		 $sql4 = "SELECT Gang_Name from gangs where id=$gang_to_id";
				  $stmt = $conn->prepare($sql4); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result2 = $stmt->get_result();
$number_of_members = $result2->num_rows;
		$result2=mysqli_query($conn,$sql4);;
				 if (mysqli_num_rows($result2) == 1) {
				while ($row = $result2->fetch_assoc()) {
					echo $row['Gang_Name'];
					$Gang_in = $row['Gang_Name'];
				}
				 }
				 echo "<br> 
		<button class='' type='button' id='leavegang2'>Yes</button>
        <button class='' type='button' id='cancelleavegang'>No</button><br>";
		echo $successor;
		echo " will be the new Owner of ";
		echo $Gang_out;
        echo "<script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang2').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 2,
					to: '$to',
					from: '$from',
					successor: '$successor',
					gangid: '$gangid',
					gang_out: '$Gang_out',
					gang_in: '$Gang_in'
				},
                url: 'gang_invite_accept_action.php',
                success: function(data) {
                     $('#invitations').html(data);

                }
            });
   });
});</script>";		
 }
		
 }
		}
 
			
		}
		
		}
	}
else if($_POST['type']==2){
	$gangidx = $_SESSION['Gang_ID'];
	if (isset($_POST["successor"])) { 
	$successor = $_POST['successor'];
		$sql = "SELECT b.owner
				FROM members a, gangs b
				WHERE a.gang_id = b.id AND b.id=$gangidx";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_members = $result->num_rows;
		$res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['owner'])
            {
				$sql3 = "DELETE from members WHERE user='$username'";
 if ($conn->query($sql3) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
				$sql4 = "UPDATE members SET isOwner='True' WHERE user='$successor'";
				if ($conn->query($sql4) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql4 = "UPDATE gangs SET owner='$successor' WHERE id=$gangidx";
 if ($conn->query($sql4) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql5 = "INSERT INTO members (gang_id, user, isAdmin, isOwner) VALUES ('$gangid','$to','False','False')";
 if ($conn->query($sql5) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql6 = "DELETE from invitations WHERE invite_to='$to' AND invite_from='$from'";
if ($conn->query($sql6) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo "<script>$('.menuitems').load('gangs.php');</script>";
			}
 }
	
	
	}
	if (!isset($_POST["successor"])) {
		$gangidx = $_SESSION['Gang_ID'];
		   $to = $_POST['to'];
		$from = $_POST['from'];
	      $sql = "SELECT b.owner
				FROM members a, gangs b
				WHERE a.gang_id = b.id AND b.id=$gangidx";
				$gangid = $_POST['gangid'];
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_members = $result->num_rows;
		$res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res) > 0) {
	  $row = mysqli_fetch_assoc($res);
            if ($username==$row['owner'])
				{
if (mysqli_num_rows($res) == 1) {
	$sql3 = "DELETE from members WHERE user='$username'";
 if ($conn->query($sql3) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql4 = "DELETE from gangs WHERE id=$gangidx";
 if ($conn->query($sql4) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql5 = "INSERT INTO members (gang_id, user, isAdmin, isOwner) VALUES ('$gangid','$to','False','False')";
 if ($conn->query($sql5) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql6 = "DELETE from invitations WHERE invite_to='$to' AND invite_from='$from'";
if ($conn->query($sql6) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
}
echo "<script>$('.menuitems').load('gangs.php');</script>";
				}
 }
	}
}
		
	}
	}
?>