<?php
include 'includes/connection.php';
	session_start();
	if (isset($_SESSION['username']) && (isset($_SESSION['isGlobalAdmin']))) {
			$username = $_SESSION['username'];
?>
<form method='post' action='' enctype='multipart/form-data'>
  <?php
   $rand=rand();
   $_SESSION['rand']=$rand;
  ?>
 <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
 <input type="file" name="file[]" id="file" multiple>

 <input type='button' name='submit' id="Upload" value='Upload'>
</form>
	<?php 
	}
	?>