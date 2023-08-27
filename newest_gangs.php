<?php
include 'includes/connection.php';
	session_start();
	
$sql = "select * from gangs order by id desc limit 10";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id="gangs">
<h1>Newest Gangs</h1>
 <table>
  <tr>
    <th>Gang Name</th>
  </tr>
<?php
while ($row = $result->fetch_assoc()) {
	$current_gang_id = $row['id'];
   echo "<tr><td id='Gangs_display'>";
   echo $row['Gang_Name'];
   echo "</td><td>[";
   echo $row['Gang_Tag'];
   echo "]</td></tr>";
   // echo "<script>
 //       $(document).on('click', '#";
 // echo $row['id'];
 // echo "', function(){
 //      $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
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