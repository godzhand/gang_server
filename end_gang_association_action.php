<?php
include 'includes/connection.php';
	session_start();
		if (isset($_SESSION['username']) && isset($_SESSION['Gang_ID'])) {
		$username = $_SESSION['username'];
		$gangidx = $_SESSION['Gang_ID'];
		$gangname = $_SESSION['Gang_Name'];

if($_POST['type']==1){
	echo "<div id='end_gang_association'>";
	if ($_POST['isOwner']=='True') {
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
		echo "You are the owner<br>";
			}
 }
 $sql2 = "SELECT a.user
				FROM members a, gangs b
				WHERE a.gang_id = b.id AND b.id=$gangidx";
				
				$stmt = $conn->prepare($sql2); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result2 = $stmt->get_result();
$number_of_members = $result2->num_rows;
		$result2=mysqli_query($conn,$sql2);
 if (mysqli_num_rows($result2) == 1) {
				
 echo "
       Your gang will be deleted permanently<br>
		<button class='' type='button' id='leavegang2'>Yes</button>
        <button class='' type='button' id='cancelleavegang'>No</button>
		
		<script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang2').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 2,
                    isOwner: 'True'					
				},
                url: 'end_gang_association_action.php',
                success: function(data) {
                     $('#end_gang_association').html(data);

                }
            });
   });
});";
 }
 else if (mysqli_num_rows($result2) == 2) { 
   while ($row = $result2->fetch_assoc()) {
	//$current_gang_id = $row['id'];
	if ($row['user'] != $username) { 
	$successor = $row['user'];
	echo $row['user'];
	echo " will become the new owner<br>
	<button class='' type='button' id='leavegang2'>leave Gang</button>
			<script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang2').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 2,
                    isOwner: 'True',
                    successor: '$successor'					
				},
                url: 'end_gang_association_action.php',
                success: function(data) {
                     $('#end_gang_association').html(data);

                }
            });
   });
});";
	}
}
 }
 else if (mysqli_num_rows($result2) >= 3) { 
 
 
 echo "<form><label for='GangSuccessor'>Select a new Owner</label><br><select id='GangSuccessor'>";
  while ($row = $result2->fetch_assoc()) {
	//$current_gang_id = $row['id'];
	if ($row['user'] != $username) { 
	echo "<option value='";
	echo $row['user'];
	echo "'>";
	echo $row['user'];
	echo "</option>";
	}
	
 }
 echo "
 </select><br><button class='' type='button' id='leavegang2'>leave Gang</button></form>		
 <script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang2').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 2,
                    successor: $( '#GangSuccessor option:selected' ).text()					
				},
                url: 'end_gang_association_action.php',
                success: function(data) {
                     $('#end_gang_association').html(data);

                }
            });
   });
});";
}
}
else {
	$sql4 = "DELETE from members WHERE user='$username'";
 if ($conn->query($sql4) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo "<script>$('.menuitems').load('gangs.php');</script>";
				}
}
else if($_POST['type']==2){
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
				$sql4 = "UPDATE members SET isAdmin='True', isOwner='True' WHERE user='$successor'";
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

echo "<script>$('.menuitems').load('gangs.php');</script>";
			}
 }
	
	
	}
	if (!isset($_POST["successor"])) {
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

}
echo "<script>$('.menuitems').load('gangs.php');</script>";
				}
 }
	}
}
		}
?>