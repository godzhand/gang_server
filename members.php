<?php
session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
//$_SESSION['last_page'] = $_SERVER['PHP_SELF']; // Or whatever you designate it as
include 'includes/connection.php';

$sql = "SELECT * FROM users order by kills/deaths desc";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_members = $result->num_rows;
$members =array();
?>
<div id="membersWrapper">
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
  <ul>
 <h1>Members</h1>
 <div class="table-responsive">
 <table>
 <tr>
    <th></th>
    <th></th>
	<th>Gang Tag</th>
    <th>Username</th>
    <th>KD Ratio</th>
	<th>Kills</th>
	<th>Deaths</th>
  </tr>

<?php
$cclantag = "";
while ($row = $result->fetch_assoc()) {
	
	$cuser = $row['user'];
	$sql2 = "SELECT * FROM members WHERE user='$cuser'";
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
 }
			
 }
 
   echo "<tr><td><a  onclick='PlaySound()' id='gang_invite' href='#inline'>gang invite</td><td id='Avatar_display'><img src='";
   echo $row['profile_photo'];
   
   echo "' alt='' /></td><td>";
 echo "<script>
 $(document).on('click', '#";
 echo $cclantag;
 $cuser = $row['user'];
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$cgangid'});
});</script><a onclick='PlaySound()' id='$cclantag' href='#inline'>";
echo "[$cclantag]</a></td><td id='member_display'><a  onclick='PlaySound()' id='view_profile' href='#inline'>";
   echo $row['user'];
   $cclantag = "";
   echo "</a></td><td>";
   $kills = $row['Kills'];
   $deaths = $row['Deaths'];
   if ($kills > 0) {
	   $kd = $kills / $deaths;
	   $kdfix = number_format($kd, 2, '.', '');
  echo $kdfix;
   }
   echo "</td><td>";
   echo $row['Kills'];
   echo "</td><td>";
   echo $row['Deaths'];
   echo "</td></tr>";
 
}

foreach ($members as $member) {
	
	 $avatar = $row['profile_photo'];
  //echo "<li>$avatar $member</li>";
}
if ($number_of_members > 0) { 
$linefeed = implode(",",$members);
}
?>
</table>
</div>
<li>
<a id="Leaderboards_page" href="#inline">Leaderboards</a>
</li>
<li>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
<script>
$('#back').off('click').on('click', function(){
	 PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>
<div class="overlay"></div>
</ul>
</div>
