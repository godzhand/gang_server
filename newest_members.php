<?php
include 'includes/connection.php';
	session_start();
	
$sql = "select * from users order by uid desc limit 10";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id="gangs">
<h1>Newest Members</h1>
 <table class="table">
  <tr>
    <th>username</th>
    <th>gamertag</th>
  </tr>
<?php
while ($row = $result->fetch_assoc()) {
	$current_gang_id = $row['uid'];
   echo "<tr><td id='Gangs_display'><span style='color:#";
   echo $row['color'];
   echo ";'>";
   if (!empty($row['website'])) {
   echo "<a style='color:#";
   echo $row['color'];
   echo ";' href='";
   echo $row['website'];
   echo "'>";
   echo $row['user'];
   echo "</a>";
   }
    else {
		   echo $row['user'];
	}
   echo "</span></td><td>";
   echo $row['gamertag'];
   echo "</td></tr>";
  // echo "<script>
 // $(document).on('click', '#";
 // echo $row['id'];
 // echo "', function(){
   //     $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
//});</script></tr>";

}

foreach ($gangs as $gang) {
	
	 $avatar = $row['Gang_Name'];
  //echo "<li>$avatar $member</li>";
}
if ($number_of_gangs > 0) { 
$linefeed = implode(",",$gangs);
}
?>
</table>
</div>