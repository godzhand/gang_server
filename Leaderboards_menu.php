<?php
session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
?>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<li>
<a onclick="PlaySound()" id="kills_leaderboard" href="#inline">Kills</a>
</li>
<li>
<a  onclick="PlaySound()" id="deaths_leaderboard" href="#inline">Deaths</a>
</li>
<li>
<a   onclick="PlaySound()" id="money_leaderboard" href="#inline">Money Earned</a>
</li>
<li>
<a   onclick="PlaySound()" id="accuracy_leaderboard" href="#inline">Accuracy</a>
</li>
<?php 
if (isset($_SESSION['isGlobalAdmin']) && ($_SESSION['isGlobalAdmin'] == 'True')) {
	?>
<li>
<a id="uploadScores" href="#inline">Update Leaderboards</a>
</li>
<?php
}
?>
<li>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
<div class="overlay"></div>
</ul>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>