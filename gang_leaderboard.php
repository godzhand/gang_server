<?php
include 'includes/connection.php';
	session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];

	if (isset($_SESSION['username'])) {
$sql = "select * from gangs";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();

$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id="gangs">
<img class="image3" src="img/top_box.png" />
  <ul>
 <h1>Gangs</h1>
 <table>
  <tr>
    <th>Gang Name</th>
    <th>Wins</th>
    <th>Losses</th>
  </tr>
<?php
while ($row = $result->fetch_assoc()) {
	$current_gang_id = $row['id'];
	echo "<script>
 $(document).on('click', '#";
 echo $row['id'];
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
});</script>";
   echo "<tr><td id='Gangs_display'><a onclick='PlaySound()' id='$current_gang_id' href='#inline'>";
   echo $row['Gang_Name'];
   echo "</a></td><td>";
   echo $row['Gang_Wins'];
   echo "</td><td>";
   echo $row['Gang_Losses'];
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
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>
</table>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</ul>
<img class="image4" src="img/top_box.png" />
</div>
