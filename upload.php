<?php
include 'includes/connection.php';
if (!session_id()) session_start();
	if (isset($_SESSION['username']) && (isset($_SESSION['isGlobalAdmin']))) {
			$username = $_SESSION['username'];
?>
<?php

 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  $file_parts = pathinfo($filename);
//print_r($spl->getExtension()); //gives extension 
 switch($file_parts['extension'])
{
	case "json":
	move_uploaded_file($_FILES['file']['tmp_name'][$i],'leaderboards/'.$filename);
	break;
    case "jpg":
    break;

    case "exe":
    break;

    case "": // Handle file extension for files ending in '.'
    case NULL: // Handle no file extension
    break;
}
 
 }
 $dir = "leaderboards/*.json";
$files = glob( $dir );
foreach( $files as $file ):
//echo $file;
$string = file_get_contents($file);
if ($string === false) {
	//deal with error...
}
$json_a = json_decode($string);
if ($json_a === null) { 
// deal with error }
}
if (isset($json_a->{'Scoreboard'})) {
$x = count($json_a->{'Scoreboard'});
$y = 0;
}
foreach($json_a->Scoreboard as $Scoreboard) {
	$gamertag = $Scoreboard->Gamertag;
	$accuracy = $Scoreboard->Accuracy;
    $kills = $Scoreboard->Kills;
	$deaths = $Scoreboard->Deaths;
	$bcolor = "FFFFFF";
	if ((!empty($accuracy)) && (!empty($gamertag)) && (!empty($kills)) && (!empty($deaths))) {
	if ($accuracy[0] == '$') {
		$money_earned = substr($accuracy, 1);
		$money_earned = str_replace(',', '', $money_earned);
	  $sql1 = "select * from users WHERE gamertag='$gamertag'";
	   $res=mysqli_query($conn,$sql1);
        if (mysqli_num_rows($res) == 1) {
		 //echo "located gamertag<br>";
			
		while ($row = $res->fetch_assoc()) {
			$cuser = $row['user'];
			$ccolor = $row['color'];
			echo $cuser . " AKA ";
$sql3 = "UPDATE users SET Kills = Kills + $kills, Deaths = Deaths + $deaths, Latest_Kills = $kills, Latest_Deaths = $deaths, Money_Earned = Money_Earned + $money_earned WHERE user='$cuser'";
if ($conn->query($sql3) === TRUE) {
}
		}
		}
	echo "<p style='#" . $ccolor . "'>" . $gamertag . " earned " . $accuracy . " killed " . $kills . " times and died " . $deaths  . " times <br>";
	
	}
	else {
		$accuracy2 = str_replace("00","",$accuracy);
		$accuracy2 = str_replace("%","",$accuracy2); 
		// echo $accuracy2;
		 $sql2 = "select * from users WHERE gamertag='$gamertag'";
	   $res2=mysqli_query($conn,$sql2);
        if (mysqli_num_rows($res2) == 1) {
		// echo "located gamertag<br>";
		while ($row = $res2->fetch_assoc()) {
			$cuser = $row['user'];
			$ccolor = $row['color'];
		//	echo $row['user'];
		//	echo " AKA ";
			$sql3 = "UPDATE users SET Kills = Kills + $kills, Deaths = Deaths + $deaths, Latest_Kills = $kills, Latest_Deaths = $deaths, HitPercent = $accuracy2 WHERE user='$cuser'";

           
if ($conn->query($sql3) === TRUE) {
}
		}
			
		}
		else {
			 $ccolor = "000000";
		}
		 if ((isset($ccolor)) && ($ccolor == 'ffffff')) {
		 $bcolor = "000000";
		   
		 }		 
		 
					$str = "<p style='background-color:#" . $bcolor . ";'><span style='color:#" . $ccolor . ";background-color:#" . $bcolor . ";'>" . $gamertag . "</span>  <span style='background-color:transparent;'>held an accuracy of </span><span style='background-color:transparent;'>" . $accuracy2 . "%</span><span style='background-color:transparent;'> had </span><span style='background-color:transparent;'>" . $kills . "</span><span style='background-color:transparent;'> kills and </span><span style='background-color:transparent;'>" . $deaths  . " deaths</span> <p>";
          if (isset($str_final)) {
			$str_final = $str_final . $str;
          }
		  else {
			   $str_final = $str;
		  }
}
	}
}

//while ($y <= $x) { 

//foreach($json_a->{'Scoreboard'}[$y] as $item) { 
 //echo $item;
//}
//$y = $y+1;
//}
 if(is_file($file))
            {
                //echo("Deleting:" . $file . "</br>");
                unlink($file);
				if (isset($str_final)) {
			echo "<div id='live update'>" . $str_final . "</div>";
          }
            }           
endforeach;
} 
?>