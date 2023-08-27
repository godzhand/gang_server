<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
	}
$commentQuery = "SELECT id, comment, name FROM comments WHERE Page_ID = '0' ORDER BY id ASC";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	$userz = $comment["name"];
	$sql = "select * from users Where (user='$userz')";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
 $profile_photo = $row['profile_photo'];
 $profile_username = $row['user'];
 $bio = $row['bio'];
 $site = $row['website'];
 $color = $row['color'];
 $gamertag = $row['gamertag'];
 $display_name = $profile_username;
 $sql2 = "SELECT * FROM members WHERE user='$userz'";
$NOW = date("Y-m-d H:i:s");
$stmt2 = $conn->prepare($sql2); 
//$stmt->bind_param("s", $NOW);
$stmt2->execute();
$result2 = $stmt2->get_result();
$number_of_members = $result2->num_rows;
		$res=mysqli_query($conn,$sql2);
 if (mysqli_num_rows($result2) > 0) {
            // output data of each row
            $row2 = mysqli_fetch_assoc($res);
			$cgangid = $row2['gang_id'];
				$sql3 = "SELECT * FROM gangs WHERE id='$cgangid'";
$NOW = date("Y-m-d H:i:s");
$stmt3 = $conn->prepare($sql3); 
//$stmt->bind_param("s", $NOW);
$stmt3->execute();
$result3 = $stmt3->get_result();
$number_of_members = $result3->num_rows;
		$res2=mysqli_query($conn,$sql3);
		
 if (mysqli_num_rows($result3) > 0) {
            // output data of each row
            $row3 = mysqli_fetch_assoc($res2);
			$cclantag = $row3['Gang_Tag'];
			$gang_name = $row3['Gang_Name'];
			$motto = $row3['motto'];
 }
			
 }
 else {
	 $cclantag = "";
	 $gang_name = "";
	 $motto = "";
 }
 if (!empty($gamertag)) {
	  $display_name = $gamertag;
 } 
$commentHTML .= '
		<div id="comment-box"><setion class="user"><div id="user"><div id="Avatar"><img src='.$profile_photo.'></div><div id="username">['.$cclantag.']<span class="comment-user" style="color:#'.$color.';">'.$display_name.'</span></div></div><section>
		<div id="comment">'.$comment["comment"].'<div></div></div>
</div> ';
		//<a style="color:#ffffff;" href="'.$site.'" target="_blank">
	$commentHTML .= getCommentReply($conn, $comment["id"]);
}
	
}
echo $commentHTML;
function getCommentReply($conn, $parentId = 0, $marginLeft = 0) {
	$commentHTML = '';
	$commentQuery = "SELECT id, comment, name FROM comments WHERE page_id = '".$parentId."'";	
	$commentsResult = mysqli_query($conn, $commentQuery);
	$commentsCount = mysqli_num_rows($commentsResult);
	if($parentId == 0) {
		$marginLeft = 0;
	} else {
		$marginLeft = $marginLeft + 48;
	}
	if($commentsCount > 0) {
		while($comment = mysqli_fetch_assoc($commentsResult)){  
	$sql = "select * from users Where (user='$username')";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
?>
<?php
while ($row = $result->fetch_assoc()) {
 $profile_photo = $row['profile_photo'];
 $profile_username = $row['user'];
 $bio = $row['bio'];
 $site = $row['website'];
 $color = $row['color'];
 $gamertag = $row['gamertag'];
 $last_page = $_SESSION['last_page'];
}
		         
			$commentHTML .= '
				<div class="panel panel-primary" style="margin-left:'.$marginLeft.'px">
				<div class="panel-heading">By'.$profile_photo.'<b>'.$username.'</b></div>
				<div class="panel-body">'.$comment["comment"].'</div>
				<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
				</div>
				';
			$commentHTML .= getCommentReply($conn, $comment["id"], $marginLeft);
		}
	}
	return $commentHTML;
}
?>