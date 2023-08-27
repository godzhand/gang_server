<?php
session_start();
include 'includes/connection.php';
session_start();

echo $_SESSION['last_page'];
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];

$sql = "SELECT * FROM users order by Deaths desc";
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
 <h1>Deaths leaderboard</h1>
 <table>
 <tr>
    <th></th>
    <th></th>
    <th>Username</th>
   <th>Deaths</th>
  </tr>

<?php
while ($row = $result->fetch_assoc()) {
   echo "<tr><td><a  onclick='PlaySound()' id='gang_invite' href='#inline'>gang invite</td><td id='Avatar_display'><img src='";
   echo $row['profile_photo'];
   echo "' alt='' /></td><td id='member_display'><a  onclick='PlaySound()' id='view_profile' href='#inline'>";
   echo $row['user'];
   echo "</a></td><td>";
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
<li>
<a id="Leaderboards_page" href="#inline">Leaderboards</a>
</li>
<li>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $(".menuitems").load('<?php echo $_SESSION['last_page']?>'); //fixed thanks Beebo!
});
</script>
<div class="overlay"></div>
</ul>
</div>
