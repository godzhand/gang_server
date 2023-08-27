<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
if (isset($_SESSION['current_page'])) {
$_SESSION['last_page'] = $_SESSION['current_page']; // Or whatever you designate it as
}
else { 
$_SESSION['last_page'] =  $_SERVER['PHP_SELF'];
}
$_SESSION['current_page'] = $_SERVER['PHP_SELF']; // Or whatever you designate it as
?>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<li>
<a onclick="PlaySound()" id="members_page" href="#inline">Members</a>
</li>
<li>
<a id="test" href="#inline">Friends</a>
</li>
<li>
<a  onclick="PlaySound()" id="gangs_page" href="#inline">Gangs</a>
</li>
<li>
<a onclick="PlaySound()" id="customize" href="#inline">Customization</a>
</li>
<li>
<a id="Lobby" href="#inline">lobby</a>
</li>
<li>
<a onclick="PlaySound()" id="Leaderboards_page" href="#inline">Leaderboards</a>
</li>
<li>
<a id="uploadSnippet" href="#inline">Upload Snippet</a>
</li>
<?php 
if (isset($_SESSION['isGlobalAdmin']) && ($_SESSION['isGlobalAdmin'] == 'True')) {
	?>
<li>
<a id="uploadScores" href="#inline">Update Leaderboards</a>
</li>
<li>
<a id="resetScores" href="#inline">reset Leaderboards</a>
</li>
<script>
$('#back').off('click').on('click', function(){
	    PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>
<?php

}
?>
<div class="overlay"></div>
</ul>


