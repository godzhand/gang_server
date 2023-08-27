<?php
$json = file_get_contents('scoreboard.json');
$obj = json_decode($json);
foreach($obj->Scoreboard as $mydata)
{
	echo "gamertag:" . $mydata->Gamertag . "\n";
     echo $mydata->Kills . "\n";
	 echo $mydata->Deaths . "\n";
	 echo $mydata->HitPercentage . "\n";

}        


?>