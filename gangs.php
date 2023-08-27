<?php
session_start();
?>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<li>
<?php
include 'includes/connection.php';
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];

if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	 $sql = "select * from gangs a, members b where a.id=b.gang_id and b.user='$username'";
   $res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['user'])
			{
			$_SESSION['Gang_Name'] = $row['Gang_Name'];	
			$_SESSION['Gang_ID'] = $row['gang_id'];			
			$_SESSION['isAdmin'] = $row['isAdmin'];
			$_SESSION['isOwner'] = $row['isOwner'];
			echo "<a id='gang_info' href='#inline'>";
			echo $row['Gang_Name'];
			echo "</a><br>";
					echo "<a id='end_gang' href='#inline'>End Gang Association</a><br>";
				    echo "<a id='gang_list' href='#inline'>Gang Members</a><br>";
					
	}
 }
	else {
		echo "<a id='create_gang' href='#inline'>Create A Gang</a>";
	}
}
?>
<script type="text/javascript">
    var current_gang_id = '<?php echo $row['gang_id']; ?>';
</script>
</li>
<li>
<a id="invites" href="#inline">Invitations</a>
</li>
<li>
<a id="gang_leaderboard" href="#inline">Leaderboard</a>
</li>
<li>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
</script>
<div class="overlay"></div>
</ul>
<img class="image2" src="img/top_box.png" />