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
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;

}

/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
.center {
	text-align: center;
}
#mainContent {
	text-align: center;
}
body {
	background-color: #000;
	color: #fff;
}
div {
font-family: Tahoma; font-size: 8pt;	
	
}
#container {
	color: #fff;
}
.sidenav {
 
  background-color: #000;
  overflow-x: hidden;
  border-image: url("images/info_box2.png") stretch 6;
	
}
.flex-child {
    flex: 1;
	
	
}  

.messenger_status { 
 position: relative;
	bottom:0px;
	right: 0px;
	
}
.messenger_box {
	width: 243px;
	height: 283px;
	border: solid 9px;
	border-image: url("images/ill_wireless.png") stretch 50;
	color: #01D7F1;
	background-color: #000;
	position: absolute;
	bottom: 0px;
	right: 0px;
	z-index: 1;
	text-align: center;
	
}
.messenger_statusbar {
	position: absolute;
	bottom:0px;
	right: 0px;
	
}


/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 10px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.sidenav ul {
	list-style-type: none;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #06E304;
}
.lastcoumn {
	text-align: center;
	
}
/* Main content */
.main {
	position: relative;
	top:0px;
	left: 0px;
  margin-left: 0px; /* Same as the width of the sidenav */
  font-size: 10px; /* Increased text to enable scrolling */
  padding: 0px 0px;
	height: 300px;
	overflow: auto;
	border: solid 9px;
    border-image: url("images/info_box2.png") stretch 30;
}

/* Element | http://98.194.130.207/gang_server/index5.php */

.main {
  /* border-image: url(images/saintsrow.png'\); */
  /* border-image: url(images/saintsrow.png"\); */
  background: black;
	margin-top:20px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
} 
#container {
}
.content1 {
	display: flex;
	
}
#container .content1 .main.flex-child {
}
#container .content1 .main.flex-child {
}
#TOD { 
	border: solid 6px;
    border-image: url("images/info_box2.png") stretch 3;
}

</style>
</head>
<body>

<!-- Note -->
<div style="background:yellow;padding:5px">
  <h4 style="text-align:center">Resize the browser window to see the responsive effect.</h4>
</div>
	<div id="TOD">
		<div class="center">Today is Friday -› May 28, 2021
		<br>-› Welcome to the site.
		<br>-› Online Users (1 members, 1 guests): root
	</div>
	</div>
<div class="row">
<div class="side">this is the side</div><div class="main">
content
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
<!-- Header -->
<div class="header">
  <h1>My Website</h1>
  <p>With a <b>flexible</b> layout.</p>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
