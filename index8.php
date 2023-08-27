<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.Container {
	 display: grid;
  grid-template-columns: 0.2fr 0.6fr 0.2fr;
  grid-column-gap: 1em;
  grid-row-gap: 1em;
  grid-auto-rows: minmax(100px, auto);
}

.Container > div {

}
.A {

}
.B {
}
.C {
}
</style>
</head>
<body>
<link href="css/menu_theme8.css" rel="stylesheet" type="text/css">
<link href="index5.css" rel="stylesheet" type="text/css">
<div class="Container">
<div class="A" align="center">
<img class="image1" src="img/top_box.png" />
<h1>Sign in</h1>
 <form method="post">
  <div class="imgcontainer">
    <img src="gifs/player_unset.gif" alt="Avatar" class="avatar">
  </div>

  <div class="login_container">
    <label for="uname"><b>Username</b></label>
	<div class="input-icons" style="text-align:center;">
            <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter Username" name="uname" id="uname" required>
	</div>

    <label for="pwd"><b>Password</b></label>
		<div class="input-icons" style="text-align: center;">
            <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
     </div>
    <input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
<span id="create_account" class="signup"><a href="#">Create Profile</a></span>
  <span class="psw"><a href="#">Forgot Password?</a></span>
</form> 
<hr>
<img class="image2" src="img/top_box.png" />
</div>
<div class="B">
<div class="main">
<div>
-› Design/PHP Coded by godzhand<br>
-› Online Users (5 members, 12 guests): Dallas, poopmcflurry, neox, neukortex, outlawx<br>
-› Site is not being viewed correctly, please set your resolution to 1024x768<br>
-› Your current resolution is 790x486.<br>
</div>
<div><h1>Downloads Added</h1>
  Colorful World
    <br> submitted by [xDWPx]fatdave 9/22/2003<br>
-› September 21, 2003<br>
    › (ModPack) OpenWorld Co-Op by [xRSx]JIF` 
</div>
<div> -› MSN Ways gone as of Oct. 14 (Views: 41/Last View: neox/Last Comment: Steve`)<br>
This site will be undergoing a big change in october, like many others. MSN is doing away with much of their international chats, and are going to make a creditcard subscription needed, or only allow users to chat in moderated chatrooms in us/uk chats. On the bright side .. if there is one.. DigitalfuseNET will be returning in early october in-case this change does take effect.
<br>Posted by neox on 09/23/03 @ 07:58pm EST<br>
Comments(12)
</div>
<div>testing</div>
</div>
</div>
<div class="C">
<div class="side">
    <div class="sidenav">
 <ul>›Main
	 <li></li>
  <li> <a href="#home">Home</a></li>
  <li> <a href="#signup">Site signup</a></li>
  <li> <a href="#forgotpwd">Forgot Password?</a></li>
</ul>
	 <ul>›Gangs
	 <li></li>
  <li> <a href="#home">Create A Gang</a></li>
  <li> <a href="#signup">Gang List</a></li>
		  <li> <a href="#signup">0 Gang invitations</a></li>
</ul>
	<ul>›Downloads
	<li><a href="#home">Mods</a></li>
	<li><a href="#home">Tools</a></li>
	</ul>
</div>
	<a href="#home" ></a>
	
</div>
</div>
</div>
</html>