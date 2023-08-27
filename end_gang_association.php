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
<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username'])) {
		if ($_SESSION['isOwner'] == 'True') {
			$gangname = $_SESSION['Gang_Name'];
		echo "<div id='end_gang_association'>are you sure you want to leave $gangname?<br>
		<button class='' type='button' id='leavegang'>Yes</button>
        <button class='' type='button' id='cancelleavegang'>No</button>
		<script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 1,
                    isOwner: 'True'					
				},
                url: 'end_gang_association_action.php',
                success: function(data) {
                     $('#end_gang_association').html(data);

                }
            });
   });
});
</script>
		
		";
		}
		else {
					$gangname = $_SESSION['Gang_Name'];
		echo "<div id='end_gang_association'>are you sure you want to leave $gangname?<br>
		<button class='' type='button' id='leavegang'>Yes</button>
        <button class='' type='button' id='cancelleavegang'>No</button>
		<script type='text/javascript'>
    $(document).ready(function(){
        $('#leavegang').click(function(){

            $.ajax({
                type: 'POST',
				data: {
					type: 1,
                    isOwner: 'False'					
				},
                url: 'end_gang_association_action.php',
                success: function(data) {
                     $('#end_gang_association').html(data);

                }
            });
   });
});
</script>
		
		";
		}
}
