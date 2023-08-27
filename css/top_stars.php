<?php
include 'includes/connection.php';
	session_start();
	
$sql = "select * from users order by Kills asc limit 1";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id="gangs">
<h1>Top Stars</h1>
 <table class="table">
  <tr>
    <th>username</th>
    <th>gamertag</th>
  </tr>
<?php
while ($row = $result->fetch_assoc()) {
	$current_gang_id = $row['uid'];
   echo "<tr><td id='Gangs_display'>";
   echo $row['user'];
   echo "</td><td>";
   echo $row['Kills'];
   echo "</td>";
   echo "<script>
 $(document).on('click', '#";
 echo $row['id'];
 echo "', function(){
       $('.menu').load('gang_info.php', {'gang_id': '$current_gang_id'});
});</script></tr>";

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