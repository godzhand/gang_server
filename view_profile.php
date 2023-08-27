<?php
include 'includes/connection.php';
if (!session_id()) session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
$_SESSION['current_page'] = $_SESSION['current_page'] . "?profile=" . $_REQUEST['profile'];

	 $view_profile = $_REQUEST['profile'];
if (isset($_SESSION['username'])) {
$sql = "select * from users Where (user='$view_profile')";
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
 echo "<ul>
 <div class='card'>
  <h1 class='card_profile' style='color:$color;'>$profile_username</h1>
  <h1 class='card_gamertag' style='color:$color;'>$gamertag</h1>
  <img class='card_avatar' src='$profile_photo' alt=''>
  <p class='title'>$bio</p>
  <p>$site</p>
  <p></p>
</div>
<li>
<a onclick='PlaySound()' id='members_page' href='#inline'>Members</a>
</li>
</ul>
?>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('$last_page');
});
</script>";
}

	}
?>
