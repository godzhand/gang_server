<?php
include 'includes/connection.php';
	session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
echo $_SESSION['last_page'];
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
 $(document).on('click', '#edit1";
 echo $current_gang_id;
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
});</script>";
	     echo "<a onclick='PlaySound()' id='edit1$current_gang_id' href='#inline'>exit</a>";
	}
	}
	}
 echo "<h1>";
 echo $row['Gang_Name'];
 $gangname = $row['Gang_Name'];
 echo "</h1>";
 echo "<table><form id='Saveganginfo' method='post'><input type='hidden' id='gang_id' name='gang_id' value='$current_gang_id'><input type='hidden' id='gang_name' name='gang_name' value='$gangname'><tr><td>Gang Tag</td><td><input class='input-field' type='text' placeholder='Enter Gang tag' name='gang_tag' id='gang_tag' value='";
 echo $row['Gang_Tag'];
 echo "'>";
 echo "</td></tr><td>Motto</td><td><input class='input-field' type='text' placeholder='Enter Gang Motto' name='gang_motto' id='gang_motto' value='";
 echo $row['motto'];
 echo "'></td></tr>";
 echo "<tr><td>Gang Bio</td><td><textarea placeholder='Enter Gang Bio' name='gang_bio' id='gang_bio' style='height:200px; width:100%'>";
 echo $row['Gang_Bio'];
 echo "</textarea></td><td><input type='button' name='save' class='btn btn-primary' value='update' id='saveganginfo'></td></tr>";
 echo "<script>
 $(document).on('click', '#";
 echo $current_gang_id;
 echo "', function(){
       $('.menuitems').load('gang_members.php', {'gang_id': '$current_gang_id'});
});</script>";
   echo "<tr><td id='Gangs_display'><a onclick='PlaySound()' id='$current_gang_id' href='#inline'>View Members";
 
 echo "</a></td></tr></form></table>";
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
<li>
<a  onclick="PlaySound()" id="gangs_page" href="#inline">Gangs</a>
</li>
<li>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
</ul>
</div>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>