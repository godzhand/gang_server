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

/* Style the body */
body {
 font-family: Ariel; 
  margin: 0;
}
/* Column container */
.row {  
  display: grid;
  grid-template-columns: 1fr 2fr 1fr;
  grid-column-gap: 1em;
  grid-row-gap: 1em;
  grid-auto-rows: minmax(100px, auto);
}

.row2 {
display: flex;
 flex-wrap: nowrap;
}
.row > div {
background-color: #eee;
padding: 1em;
}
.row > div:nth-child(odd) {
background-color: #ddd;
}
/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 1;
  background-color: #f1f1f1;
  padding: 20px;
}
.header {
background-color: #000;
color: #fff;
padding: 64px;
text-align: center;
font-size: 20px;
}
/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 20px;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
  
}
</style>
</head>
<body>
<div class="row">
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
<div class="main2">
	testing this is a test!
</div>
<div>this is a new test</div>
</div>
<div class="row2">
 <div><h5>gangs on this site: 6; gangmembers total: 300. Your not in a gang. join third street saints</h5></div>
</div>
</body>
</html>