<?php
if (!session_id()) session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
$_SESSION['current_page'] = $_SESSION['current_page'] . "?gang_id=" . $_REQUEST['gang_id'];
include 'includes/connection.php';
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$path = $_REQUEST['gang_id'];
		$gangidx = $path;
		if (isset($_SESSION['Gang_Name'])) {
			
		$gangname = $_SESSION['Gang_Name'];
		}
$sql = "SELECT b.Gang_Name, a.user, a.isOwner, a.isAdmin
				FROM members a, gangs b
				WHERE a.gang_id = b.id AND b.id=$path";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id='gangs'>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<li>
<?php
	$sql2 = "SELECT b.Gang_Name FROM members a, gangs b
				WHERE a.gang_id = b.id AND b.id=$path";
				$stmt2 = $conn->prepare($sql2);
				$stmt2->execute();
				$result2 = $stmt2->get_result();
				while ($row2 = $result2->fetch_assoc()) {
	$gangnameb = $row2['Gang_Name'];
				}
	 echo "<h1>$gangnameb</h1>
 <table>
  <tr>
    <th>Member</th>
    <th>isAdmin</th>
    <th>isOwner</th>
  </tr>";
?>
<?php
while ($row = $result->fetch_assoc()) {
	
	//$current_gang_id = $row['id'];
	echo "<script>
 $(document).on('click', '#";
 //echo $row['gang_id'];
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$gangidx'});
});</script>";
   echo "<tr><td id='Member_display'><a  onclick='PlaySound()' id='$gangidx' href='#inline'>";
   echo $row['user'];
   echo "</a></td><td>";
   echo $row['isAdmin'];
   echo "</td><td>";
   echo $row['isOwner'];
   echo "</td>";
   echo "</tr>";
}

foreach ($gangs as $gang) {
	
	 $avatar = $row['Gang_Name'];
  //echo "<li>$avatar $member</li>";
}
if ($number_of_gangs > 0) { 
$linefeed = implode(",",$gangs);
}
	}
?>
<?php
 echo "<script>
 $(document).on('click', '#";
 echo $path . "gm";
 //$cuser = $row['user'];
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$path'});
});</script><tr><td  id='Gangs_Info'><a onclick='PlaySound()' id='$path" . "gm' href='#inline'>View Gang info";
echo "</a></td></tr></table>";
?>
</li>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>
<li>

<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
</ul>
</div>
