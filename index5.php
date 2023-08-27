<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="index5.css" rel="stylesheet" type="text/css">
	
</head>

<body>
<div class="container" id="container">
	<div class="loginbox" id="lognbox" align="right">
	<form id="login_form" name="login_form" method="post">
	sign in <input type="text"> <input type="password"><input type="submit">
</form>
	</div>
	<div id="TOD">
		<div class="center">Today is Friday -› May 28, 2021
		<br>-› Welcome to the site.
		<br>-› Online Users (1 members, 1 guests): root
	</div>
	</div>
	<div class="content1">
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
</div><div class="main flex-child">
<section id="mainContent"> 
	<h2>Content Uploaded</h2>
  -› September 22, 2003<br>
    › (ModPack) Colorful World submitted by [xDWPx]fatdave
    <br>
-› September 21, 2003<br>
    › (ModPack) OpenWorld Co-Op by [xRSx]JIF` 
		<br>
		</section>
</div>
<!--		<div class="messenger_box"><div class="messenger_status">Mike signed online.</div><div class="messenger_statusbar"><p>0<br>gang invites</p></div></div>-->
	</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</div>
</body>
</html>
