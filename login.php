<?php
session_start();

include 'includes/connection.php';
if (!isset($_SESSION['last_page'])) {
 $_SESSION['last_page'] = 'main_menu.php';
}
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<link rel="stylesheet" href="css\menu_theme8.css">
<link href="index5.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Blinker:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&family=Teko&display=swap" rel="stylesheet"> 
<script src="scripts/anchorme.min.js"></script>
<script src="scripts/md5.min.js"></script>
<script src="scripts/register.js"></script>
<script src="scripts/primus-ircjs.bundle.js"></script>
<script src="scripts/socket.io.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> 
<title>Login</title>
<script>
const URL =  "https://tha-row.net:3000/";
const socket = io(URL, { autoConnect: false });
</script>
<div id="topbox">
<img class="image1" src="img/top_box.png" />
</div>
<ul>
<h1>Sign in</h1>
 <form method="post">
  <div class="imgcontainer">
    <img src="gifs/player_unset.gif" alt="Avatar" class="avatar">
  </div>

  <div class="login_container">
    <label for="uname"><b>Username</b></label>
	<div class="input-icons">
    <input class="input-field" type="text" placeholder="Enter Username" name="uname" id="uname" required>
	</div>

    <label for="pwd"><b>Password</b></label>
		<div class="input-icons">
     <input class="input-field" type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
     </div>
    <input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin"></button>
	<span id="create_account" class="signup"><a href="#">Create Profile</a></span>
  <span class="psw"><a href="#">Forgot Password?</a></span>
  </div>
</form> 
<div class="overlay"></div>
</ul>
<script>
var input = document.getElementById("pwd");
input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("butlogin").click();
    }
});
$('#back').off('click').on('click', function(){
         $('.menuitems').load('<?php echo $_SESSION['last_page']?>');
});
$(document).on('click', '#butlogin', function(e){
		username = $('#uname').val();
		var password = $('#pwd').val();
		if(username!="" && password!="" ){
			$.ajax({
				url: "testx.php",
				type: "POST",
				data: {
					type: 1,
					username: username,
					password: password					
				},
				cache: false,
				success: function(dataResult){
					//console.log('Response:', dataResult);
					 var obj = JSON.parse(dataResult);
					 console.log(obj.Member.Avatar);
					if(obj){
					
					Avatar = obj.Member.Avatar;
					username = obj.Member.username;
				     //$('#result').html('Logged in!'); 
                     $('#butlogin').disabled = true;
                     $(".menuitems").load("main_menu.php");
					 socket.auth = { username };
                     socket.connect();
					 socket.emit("logged_in",{ id: username, Avatar: Avatar });
					
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('user not registered!');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
</script>