<?php
if (!session_id()) session_start();
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['PHP_SELF'];
$_SESSION['current_page'] = $_SESSION['current_page'] . "?gang_id=" . $_REQUEST['gang_id'];
?>
<img class="image1" src="img/top_box.png" />
<ul>
<li>
<div id="invitations">
<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	 $sql = "select * from invitations where invite_to='$username'";
   $res=mysqli_query($conn,$sql);
while ($row = $res->fetch_assoc()) {
	//$current_gang_id = $row['id'];
	$gangid = $row['gang_id'];
	$invite_to = $row['invite_to'];
	$invite_from = $row['invite_from'];
	 $sql2 = "select Gang_Name from gangs where id='$gangid'";
	   $res2=mysqli_query($conn,$sql2);
	   if (mysqli_num_rows($res2) > 0) {
            // output data of each row
            $row2 = mysqli_fetch_assoc($res2);
			$gangname = $row2['Gang_Name'];
			echo "
			<div id='invite$gangid'>$invite_from invited you to <br>$gangname<br>
would you like to join?<br><a id='AcceptGangInvite$gangid' href='#inline'>Accept</a> <a id='DeclineGangInvite$gangid' href='#inline'>Decline</a>
	</div>
	 <script type='text/javascript'>
    $(document).ready(function(){
        $('#AcceptGangInvite$gangid').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 1,
					to: '$invite_to',
					from: '$invite_from',
					gangid: '$gangid'
				},
                url: 'gang_invite_accept_action.php',
                success: function(data) {
                     $('#invite$gangid').html(data);

                }
            });
   });
     $('#DeclineGangInvite$gangid').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 1,
					to: '$invite_to',
					from: '$invite_from',
					gangid: '$gangid'
				},
                url: 'gang_invite_decline_action.php',
                success: function(data) {
                     $('#invite$gangid').html(data);

                }
            });
   });
})</script>";
	   }
	   else {
		   echo "You have no invitations";
	   }
}
 if (mysqli_num_rows($res) == '0') {
	 echo "no invitations";
 }
	}
?>

<style>
body {
	background-color: black;
}
#invitations { 
border: 5px solid red;
    border-image-outset: 0;
    border-image-repeat: stretch;
    border-image-slice: 100%;
    border-image-source: none;
    border-image-width: 1;
border-image: url('images/info_box.png') stretch 19;
background-color: black;
color: white;
}
</style>
</div>
</li>
<li>
<a id="main_menu" href="#inline">Main Menu</a>
</li>
</ul>
<div class="overlay"></div>
<img class="image2" src="img/top_box.png" />