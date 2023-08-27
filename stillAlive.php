<?php
include 'includes/connection.php';
session_start();
if(isset($_SESSION['username']))
{
$username_online = $_SESSION['username'];
$sql = "UPDATE users SET last_logged_in=NOW() WHERE user=?";
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $username_online);
$stmt->execute();
$result = $stmt->get_result();
}
else {
$ip =  ip2long($_SERVER['REMOTE_ADDR']);
$USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
echo $USER_AGENT;
$sql = "SELECT GUEST_IP from gatekeeper WHERE GUEST_IP=?";
$stmt = $conn->prepare($sql) or die(); 
$stmt->bind_param("s", $ip);
$stmt->execute();
$result = $stmt->get_result();
$NOW = date("Y-m-d H:i:s");
$number_of_online_guests = $result->num_rows;
if ($number_of_online_guests == 0) { 
     $sql = "INSERT INTO gatekeeper (GUEST_IP, USER_AGENT, GUEST_STATUS) VALUES (? , ? ,?)";
      $stmt = $conn->prepare($sql); 
$stmt->bind_param("sss",$ip,$USER_AGENT,$NOW);
	 $stmt->execute();
$result = $stmt->get_result();

 }
 else { 
  $sql = "UPDATE gatekeeper SET GUEST_STATUS=NOW() WHERE GUEST_IP=?";
$stmt = $conn->prepare($sql); 
$ip =  ip2long($_SERVER['REMOTE_ADDR']);
$stmt->bind_param("s", $ip);
$stmt->execute();
$result = $stmt->get_result();
 }
 
}



$sql = "SELECT * FROM users WHERE last_logged_in >= (NOW() - INTERVAL 5 MINUTE)";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_online_members = $result->num_rows;
$members_online =array();
while ($row = $result->fetch_assoc()) {
   $members_online[] =  $row['user'];
}
foreach ($members_online as $member) {
  //echo "$member <br>";
}
if ($number_of_online_members > 0) { 
$linefeed = implode(",",$members_online);
}
// echo $number_of_online_members;
$sql = "SELECT * FROM gatekeeper WHERE GUEST_STATUS >= (NOW() - INTERVAL 5 MINUTE)";
$stmt = $conn->prepare($sql); 
$stmt->execute();
$result2 = $stmt->get_result();
$number_of_online_guests = $result2->num_rows;

echo "$number_of_online_guests online guests";	
function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
