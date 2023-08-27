<?php
session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
?>
<div id="gangCreateWrapper">
<img class="image3" src="img/top_box.png" />
 <form id="GangCreation" method="post">
 <h1>Create A Gang</h1>
  <div class="imgcontainer">
    <img src="gifs/player.gif" alt="Avatar" class="avatar">
  </div>
  <div class="gangcreation_container">
    <label for="gang_name"><b>Gang Name</b></label>
	<div class="input-icons" style="text-align: left;">
            <i class="fa fa-exclamation icon"></i>
    <input class="input-field gangname" type="text" placeholder="Enter Gang Name" name="gang_name" id='gang_name' required autofocus>
	</div>
	   <label for="gang_tag"><b>Gang tag</b></label>
	<div class="input-icons" style="text-align: left;">
            <i class="fa fa-exclamation icon"></i>
    <input class="input-field" type="text" placeholder="Enter Gang tag" name="gang_tag" id="gang_tag" required>
	</div>
   <label for="gang_motto"><b>Gang Motto</b></label>
	<div class="input-icons" style="text-align: left;">
            <i class="fa fa-exclamation icon"></i>
    <input class="input-field" type="text" placeholder="Enter Gang Motto" name="gang_motto" id="gang_motto" required>
	</div>
    <label for="gang_bio"><b>Gang Bio</b></label>
		<div class="input-icons" style="text-align: left;">
<textarea placeholder="Enter Gang Bio" name="gang_bio" id="gang_bio" required style="height:200px; width:100%"></textarea>    
	</div>
   <input type="button" name="save" class="btn btn-primary" value="Create" id="createGang">
   </div>
</form>
<img class="image4" src="img/top_box.png" />
<a id="main_menu" href="#inline">Main Menu</a>
</div>
