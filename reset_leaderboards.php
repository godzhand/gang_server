<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username']) && (isset($_SESSION['isGlobalAdmin']))) {
		$username = $_SESSION['username'];
    
if(isset($_POST['type']) && ($_POST['type']==2)){	
$sql3 = "UPDATE users SET Kills = 0, Deaths = 0, Latest_Kills = 0, Latest_Deaths = 0, Money_Earned = 0";
if ($conn->query($sql3) === TRUE) {
 echo "leaderboards have been reset!";

}

}
else {


	echo "are you sure you want to reset the leaderboards<br>
		  <button class='' type='button' id='reset'>Yes</button>
        <button class='' type='button' id='cancelreset'>No</button>
				<script type='text/javascript'>
    $(document).ready(function(){
        $('#reset').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 2,
                    isAdmin: 'True'					
				},
                url: 'reset_leaderboards.php',
                success: function(data) {
                     $('.update_lb').html(data);

                }
            });
   });
});";

}
	}
?>