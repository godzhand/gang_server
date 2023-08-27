<?php
include 'includes/connection.php';
if (!session_id()) session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$Avatar = $_SESSION["Avatar"];
		$sql = "SELECT * FROM users WHERE (user='$username')";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_members = $result->num_rows;
$members =array();
		?>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<li>
<?php
while ($row = $result->fetch_assoc()) {
   echo "<img src='";
   echo $row['profile_photo'];
   echo "' alt='' />";
   echo $row['user'];
   $gamertag = $row['gamertag'];
   $DiscordID = $row['DiscordID'];
   $gender = $row['gender'];
   $email = $row['email'];
   $color = $row['color'];
   $website = $row['website'];
   $bio = $row['bio'];
   $favmode = $row['favmode'];
}
?>
<form>
<div>
<table>
<tr>
<td>
 <label for="email">e-mail</label>
  </td>
  <td>
  <input type="text" id="email" name="email" value="<?php echo $email?>" placeholder="enter an email address">
  </td>
  </tr>
  </div>
<div>
<tr>
<td>
  <label for="gtag">Gamertag</label>
  </td>
  <td>
  <input type="text" id="gamertag" name="gtag" value="<?php echo $gamertag?>" placeholder="enter your exact gamertag">
  </td>
  </tr>
 </div>
 <div>
<tr>
<td>
  <label for="did">Discord ID</label>
  </td>
  <td>
  <input type="text" id="DiscordID" name="did" value="<?php echo $DiscordID?>" placeholder="enter your exact DiscordID">
  </td>
  </tr>
 </div>
  <div>
<tr>
<td> 
 <label for="dlink">Website or Discord Link</label>
  </td>
  <td>
  <input type="text" id="website" name="dlink" value="<?php echo $website?>" placeholder="enter website or discord link">
  </td>
  </tr>
  </div>
  	<tr>
	<td>
		   <p>Gender</p>
		   </td>
		   <td>
		   <div>
  <input type="radio" name="gender" id="gender" value="Male" <?php if ($gender == "Male")  echo "checked" ;?>>
  <label for="BOR">Male</label>
  <input type="radio" name="gender" id="gender" value="Female" <?php if ($gender == "Female")  echo "checked" ;?>>
  <label for="PTP">Female</label>
  <input type="radio" name="gender" id="gender" value="unspecified" <?php if ($gender == "unspecified" || !isset($gender) || empty($gender))  echo "checked" ;?>>
  <label for="TGB">Unspecified</label>
    </div>
  </td>
  </tr>
  <tr>
  <td>
  <p>Choose your color</p>
  </td>
<div>
<td>
    <input type="color" id="color" name="color" value="#<?php echo $color?>">
</td>
</tr>	
	</div>
  	<tr>
	<td>
		   <p>Favorite game mode</p>
		   </td>
		   <td>
		   <div>
  <input type="radio" name="favemode" id="favemode" value="BOR" <?php if (($favmode == "BOR") || empty($favmode))  echo "checked" ;?>>
  <label for="BOR">Blinged out Ride</label>
  <input type="radio" name="favemode" id="favemode" value="PTP" <?php if ($favmode == "PTP")  echo "checked" ;?>>
  <label for="PTP">Protect Tha Pimp</label>
  <input type="radio" name="favemode" id="favemode" value="TGB" <?php if ($favmode == "TGB")  echo "checked" ;?>>
  <label for="TGB">Team Gangsta Brawl</label>
  <input type="radio" name="favemode" id="favemode" value="GB" <?php if ($favmode == "GB")  echo "checked" ;?>>
  <label for="GB">Gangsta Brawl</label>
    </div>
  </td>
  </tr>
  <tr>
  <td>
   <label for="bio">A little about yourself</label>
  </td>
  <td>
  <textarea placeholder="Enter Your Bio" name="bio" id="bio" style="height:200px; width:100%"><?php echo $bio?></textarea>    
  	 </td>
	 </tr>
	 <tr>
	 <td>
	 <h1>Change Avatar</h1>
	 </td>
	 <td>
	 <div id="avatars">
  <?php
  $dir = "avatars/*.png";
//get the list of all files with .jpg extension in the directory and safe it in an array named $images
$images = glob( $dir );

//extract only the name of the file without the extension and save in an array named $find
foreach( $images as $image ):
if ($image == $Avatar) {
echo "<label class='avatars'><input type='radio' name='Avatar' id='Avatar' value='" . $image . "' checked><img src='" . $image . "' alt='' /></label>";
}
else { 
echo "<label class='avatars'><input type='radio' name='Avatar' id='Avatar' value='" . $image . "'/><img src='" . $image . "' alt='' /></label>";
}
endforeach;
?>
</td>
</tr>
</div>
<tr>
<td>
<input type="button" name="save" class="btn btn-primary" value="SaveProfile" id="SaveProfile">
</td>
</tr>
</table>
</form> 
</li>
<li>
<a  onclick="PlaySound()" id="main_menu" href="#inline">Main Menu</a>
</li>
<script>
$('#back').off('click').on('click', function(){
	PlaySound();
         $(".menuitems").load('<?php echo $_SESSION['last_page']?>'); //fixed thanks Beebo!
});
</script>
<div class="overlay"></div>
</ul>
<?php
	}
	?>