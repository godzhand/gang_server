<?php
include 'includes/connection.php';
	session_start();
	
$sql = "select * from users order by Kills desc limit 1";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_gangs = $result->num_rows;
$gangs =array();
?>
<div id="gangs">
<h1>MVP</h1>
 <table class="table">
  <tr>
    <th></th>
    <th></th>
  </tr>
<?php
while ($row = $result->fetch_assoc()) {
	$current_gang_id = $row['uid'];
   echo "<tr><td id='Gangs_display'><span style='color:#";
   echo $row['color'];
   echo ";'>";
   echo $row['user'];
   echo "</td><td>";
   echo $row['Kills'];
   echo " kills</td>";
   echo "<script>
 $(document).on('click', '#";
 echo $row['id'];
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
});</script></tr>";

}
$sql4 = "select * from users order by Money_Earned desc limit 1";
$NOW = date("Y-m-d H:i:s");
$stmt4 = $conn->prepare($sql4); 
//$stmt->bind_param("s", $NOW);
$stmt4->execute();
$result4 = $stmt4->get_result();
$number_of_gangs = $result4->num_rows;
$gangs =array();
while ($row4 = $result4->fetch_assoc()) {
	$current_gang_id = $row4['uid'];
  echo "<tr><td id='Gangs_display'><span style='color:#";
   echo $row4['color'];
   echo ";'>";
   echo $row4['user'];
   echo "</td><td>$";
   echo $row4['Money_Earned'];
   echo " cash picked up</td>";
   echo "<script>
 $(document).on('click', '#";
 echo $row4['id'];
 echo "', function(){
       $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
});</script></tr>";

}
$sql2 = "select * from users order by Deaths desc limit 1";
$NOW = date("Y-m-d H:i:s");
$stmt2 = $conn->prepare($sql2); 
//$stmt->bind_param("s", $NOW);
$stmt2->execute();
$result2 = $stmt2->get_result();
$number_of_gangs = $result2->num_rows;
$gangs =array();
while ($row2 = $result2->fetch_assoc()) {
	$current_gang_id = $row2['uid'];
  echo "<tr><td id='Gangs_display'><span style='color:#";
   echo $row2['color'];
   echo ";'>";
   echo $row2['user'];
   echo "</td><td>";
   echo $row2['Deaths'];
   echo " deaths</td></tr>";
  // echo "<script>
 // $(document).on('click', '#";
 // echo $row2['id'];
 //  echo "', function(){
  //     $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
// });</script></tr>";

}


$sql3 = "select * from users order by HitPercent desc limit 1";
$NOW = date("Y-m-d H:i:s");
$stmt3 = $conn->prepare($sql3); 
//$stmt->bind_param("s", $NOW);
$stmt3->execute();
$result3 = $stmt3->get_result();
$number_of_gangs = $result3->num_rows;
$gangs =array();
while ($row3 = $result3->fetch_assoc()) {
	$current_gang_id = $row3['uid'];
   echo "<tr><td id='Gangs_display'><span style='color:#";
   echo $row3['color'];
   echo ";'>";
   echo $row3['user'];
   echo "</td><td>";
   echo $row3['HitPercent'];
   echo "% Accuracy</td></tr>";
//   echo "<script>
 // $(document).on('click', '#";
 // echo $row3['id'];
 // echo "', function(){
   //    $('.menuitems').load('gang_info.php', {'gang_id': '$current_gang_id'});
//                 });</script></tr>";

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