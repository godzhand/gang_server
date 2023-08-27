<?php
if (!session_id()) session_start();
if (isset($_SESSION['current_page'])) {
$_SESSION['last_page'] = $_SESSION['current_page']; 
}
else { 
$_SESSION['last_page'] =  $_SERVER['PHP_SELF'];
}
$_SESSION['current_page'] = $_SERVER['PHP_SELF']; 
?>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<li>
<h1>Create Profile</h1>
<hr>
</li>
<li>
 <form id="registrationForm" method="post">
  <div class="imgcontainer">
    <img src="gifs/player.gif" alt="Avatar" class="avatar">
  </div>
  <div class="login_container">
    <label for="uname"><b>Username</b></label>
	<div class="input-icons" style="text-align: left;">
    <input class="input-field" type="text" placeholder="Enter Username" name="uname" id="uname" required>
	</div>
   <label for="email"><b>E-mail</b></label>
	<div class="input-icons" style="text-align: left;">
    <input class="input-field" type="text" placeholder="Enter E-mail" name="email" id="email" required>
	</div>
    <label for="pwd"><b>Password</b></label>
		<div class="input-icons" style="text-align: left;">
    <input class="input-field" type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
     </div>
	     <label for="rpwd"><b>Password</b></label>
		<div class="input-icons" style="text-align: left;">
    <input class="input-field" type="password" placeholder=":Please Re-enter Password" name="rpwd" id="rpwd" required>
     </div>
	 <h1>Choose An Avatar</h1>
	 <hr>
	 <div id="avatars">
  <?php
  $dir = "avatars/*.png";
//get the list of all files with .jpg extension in the directory and safe it in an array named $images
$images = glob( $dir );

//extract only the name of the file without the extension and save in an array named $find
foreach( $images as $image ):
echo "<label class='avatars'><input type='radio' name='Avatar' id='Avatar' value='" . $image . "'/><img src='" . $image . "' alt='' /></label>";
endforeach;
?>
</div>
   <input type="button" name="save" class="btn btn-primary" value="Login" id="butreg">
  </div>
  <hr>
<span id="login" class="login"><a href="#">Already a Member? Sign in.</a></span>
</form>
<hr>
</li>
</ul>