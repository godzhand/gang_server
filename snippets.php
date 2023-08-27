<?php
session_start();

include 'includes/connection.php';
?>


<html>
<head>
<link href="css/prism.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="scripts/socket.io.js"></script>
<script src="scripts/prism.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&family=Teko&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
<script>
const URL =  "https://tha-row.net:3000/";
const socket = io(URL, { autoConnect: false });
username = '<?php echo $_SESSION["username"]; ?>';
	Avatar = '<?php echo $_SESSION["Avatar"]; ?>';
	socket.auth = { username };
 socket.connect();
socket.on('comment', message => {
	showComments();
});
</script>
<?php
$filename = 'snippets/mplobby_01.cts';
$str = file_get_contents($filename);
$filesize = filesize($filename);
$filename = basename($filename);
$bytes = number_format($filesize / 1024, 2) . ' KB';
echo "$filename $bytes<pre style='height:300px;'><code class='language-ruby'>";
$str = htmlentities($str);
//$str = addslashes($str);
//echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
echo $str;
echo "</code></pre>";
echo "<div id='snippet_desc'><p>This is a modified lobby for the map Hustlin' adding different cars, a lot of NPCs and extreme mayhem</p></div>";
?>
<div id="showComments"></div>  
<form method="POST" id="commentForm">
		<div class="form-group">
			<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
		</div>
		<span id="message"></span>
		<div class="form-group">
			<input type="hidden" name="commentId" id="commentId" value="0" />
			<input type="submit" name="submit" id="submitcomment" class="btn btn-primary" value="Post Comment" />
		</div>
	</form>		 
	
	<script>
	$(document).ready(function(){
		showComments();
	$('#commentForm').on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			url: "comments.php",
			method: "POST",
			data: formData,
			dataType: "JSON",
			success:function(response) {
				if(!response.error) {
					$('#commentForm')[0].reset();
					$('#commentId').val('0');
					$('#message').html(response.message);
					showComments();
				 socket.emit("comment",{ id: 'username' });
				} else if(response.error){
					$('#message').html(response.message);
				}
			}
		})
	});	
});
function showComments() {
	$.ajax({
		url:"show_comments.php",
		method:"POST",
		success:function(response) {
			$('#showComments').html(response);
		}
	})
}
var input = document.getElementById("comment");
input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("submitcomment").click();
    }
});
</script>
<style>

textarea {
	 width: 100%;
}
input { 
width: 100%;
}
#snippet_desc {
    text-align: center;
    font-size: 2em;
}
#comment-box {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
#comment {
  position: relative;
  top: 69px;
  /*! left: 200px; */
  /*! width: fit-content; */
  /*! word-wrap: unset; */
}
#username {
  /*! position: relative; */
  /*! top: -20px; */
  /*! left: 39px; */
}
#user {
  /*! width: 25%; */
}
.comment-user {
  /*! font-size: 3em; */
}
#showComments {
  /*! display: block; */
}


textarea {
	 width: 100%;
}
input { 
width: 100%;
}
#snippet_desc {
    text-align: center;
    font-size: 2em;
}
#comment-box {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
#comment {
  position: relative;
  top: 82px;
  left: 9px;
  /*! width: fit-content; */
  /*! word-wrap: unset; */
}
#username {
  /*! position: relative; */
  /*! top: -20px; */
  /*! left: 39px; */
}
#user {
  /*! width: 25%; */
}
.comment-user {
  font-size: 2em;
}
#showComments {
  /*! display: block; */
}
</style>