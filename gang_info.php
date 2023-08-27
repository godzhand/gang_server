<?php
include 'includes/connection.php';
	
session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
$_SESSION['current_page'] = $_SESSION['current_page'] . "?gang_id=" . $_REQUEST['gang_id'];
	$path = $_REQUEST['gang_id'];
	if (isset($_SESSION['username'])) {
$sql = "select * from gangs Where (id='$path')";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id="gangs">
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
 <ul>
<?php
while ($row = $result->fetch_assoc()) {
	$current_gang_id = $row['id'];
	if (isset($_SESSION['Gang_ID'])) {
	if ($current_gang_id == $_SESSION['Gang_ID']) {
	if ($_SESSION['isAdmin'] == 'True') { 
	echo "<script>
 $(document).on('click', '#edit";
 echo $current_gang_id;
 echo "', function(){
       $('.menuitems').load('gang_info_edit.php', {'gang_id': '$current_gang_id'});
});</script>";
	     echo "<a onclick='PlaySound()' id='edit$current_gang_id' href='#inline'>edit page</a>";
	}
	}
	}
 echo "<h1>";
 echo $row['Gang_Name'];
 echo "</h1>";
 echo "<table><tr><td>Gang Tag</td><td>[";
 echo $row['Gang_Tag'];
 echo "]</td></tr><td>Motto</td><td>";
 echo $row['motto'];
 echo "</td></tr>";
 echo "<tr><td>Gang Bio</td><td><pre>";
 echo $row['Gang_Bio'];
 echo "</pre></td></tr>";
 echo "<script>
 $(document).on('click', '#";
 echo $current_gang_id;
 echo "', function(){
       $('.menuitems').load('gang_members.php', {'gang_id': '$current_gang_id'});
});</script>";
   echo "<tr><td id='Gangs_display'><a onclick='PlaySound()' id='$current_gang_id' href='#inline'>View Members";
 
 echo "</a></td></tr></table>";
}

foreach ($gangs as $gang) {
	
	 $avatar = $row['Gang_Name'];
  //echo "<li>$avatar $member</li>";
}
if ($number_of_gangs > 0) { 
$linefeed = implode(",",$gangs);
}
?>
<li>
<a  onclick='PlaySound()' id='gangs_page' href='#inline'>Gangs</a>
</li><li>
<a  onclick='PlaySound()' id='main_menu' href='#inline'>Main Menu</a>
</li>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>
<div class="overlay"></div>
</ul>
</div>";
	<?php
	}
	else { 
	echo "<script>$('.menuitems').load('login.php');</script>";
	}
?>
