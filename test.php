<?php
/**
 * # Instantiate.
 */
require __DIR__ . '/vendor/autoload.php';
use \OpenXBL\Api;
$xbox = new Api('0g8kg0sc8kc8o4cosccwcswk4so4gwsc4k8');

print $xbox->post('group/send', ['groupId' => '3379881124578069', 'message' => 'this is a test message']);
//print $xbox->get('group/messages/3379881124578069');
$gt = $_GET['gt'];
//$statement = "/dvr/gameclips?xuid=" . $xuid;
 $statement = "/friends/search?gt=" . $gt;
$statement = $xbox->get($statement); 
//$jsons = $xbox->get($statement);
$statement2 = json_decode($statement);
$url = $statement2->{'profileUsers'}[0]->{'settings'}[0]->{'value'};
$getid = $statement2->{'profileUsers'}[0]->{'id'};
$image = base64_encode(file_get_contents($url));
echo "<img src='$url' width='200px' height='200px'>";
//$getxuid = "/dvr/gameclips?xuid=" . $getid;
//$statement3 = $xbox->get($getxuid);
$achievment_titleid = "/achievements/player/" . $getid . "/title/"; 
echo $achievment_titleid;
$statement3 = $xbox->get($achievment_titleid);
echo $statement3;
//2533274799708930
//print $xbox->get('/friends/search?gt=LIQUID ICEXXX'); 