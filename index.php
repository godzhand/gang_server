<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
session_start();

include 'includes/connection.php';

$sql = "SELECT * FROM users WHERE last_logged_in >= (NOW() - INTERVAL 5 MINUTE)";
$NOW = date("Y-m-d H:i:s");
$stmt = $conn->prepare($sql); 
//$stmt->bind_param("s", $NOW);
$stmt->execute();
$result = $stmt->get_result();
$number_of_online_members = $result->num_rows;
$members_online =array();
while ($row = $result->fetch_assoc()) {
   $members_online[] =  $row['user'];
}
foreach ($members_online as $member) {
  //echo "$member <br>";
}
if ($number_of_online_members > 0) { 
$linefeed = implode(",",$members_online);
}
// echo $number_of_online_members;
$sql = "SELECT * FROM gatekeeper WHERE GUEST_STATUS >= (NOW() - INTERVAL 5 MINUTE)";
$stmt = $conn->prepare($sql); 
$stmt->execute();
$result2 = $stmt->get_result();
$number_of_online_guests = $result2->num_rows;
 //echo $number_of_online_guests;
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
<script type="text/javascript"> DiscourseEmbed = { discourseUrl: 'https://saintsrow.net/', discourseEmbedUrl: 'https://tha-row.net/index.php' }; (function() { var d = document.createElement('script'); d.type = 'text/javascript'; d.async = true; d.src = DiscourseEmbed.discourseUrl + 'javascripts/embed.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(d); })(); </script>
<title>Main Menu</title>
<script>
const URL =  'https://saintsrow.live'
// server-side
const socket = io("wss://app.saintsrow.live", {
  transports: ["websocket"]
});
//const socket = io(URL, { autoConnect: false });
//o.set('origins', URL);
	socket.on('greetings', message => {
	 console.log('greetings' + message)
});

socket.on('randomquote', message => {
	$('.d').html(message);
});
socket.on('logged_in', function(data) {
	var user_online = data.id;
	var user_online_profile = data.Avatar;
	  $( '.e').fadeIn( "slow" );
	$('.e').html('<img src="' + user_online_profile + '" alt="" />' + user_online + ' is online<br>');
	$('.e').delay(10000).fadeOut();
	
});
socket.on('comment', message => {
	showComments();
});
socket.on('alert_update', function(data) {
var chmsg = data.channelMsg;
$('.stats').append(chmsg);
	
});
socket.on("connect", () => {
  console.log(socket.id  + ' connected'); // x8WIv7-mJelg7on_ALbx
});
socket.on("users", function(users, amount) {
	$('.onlineusers').html(amount + ' online users: ');
	users.forEach((user) => {
		user.self = user.userID == socket.id;
		$('.onlineusers').append(user.username + ' ');
	});
           
});
socket.on('chat message', function(msg) {
    var item = document.createElement('li');
    item.textContent = msg;
    messages.appendChild(item);
   // window.scrollTo(0, document.body.scrollHeight);
  });
socket.on("disconnect", () => {
  console.log(socket.id + ' disconnected'); // undefined
});

$.ajaxSetup({
    cache: false
});

var username;

$( document ).ajaxComplete(function() {
	$("#SubmitButton").click(function() {
        // using serialize function of jQuery to get all values of form
        var serializedData = $("#registrationForm").serialize();
        // Variable to hold request
        var request;
        // Fire off the request to process_registration_form.php
        request = $.ajax({
            url: "create_action.php",
            type: "POST}",
			xhrFields: { 
				withCredentials: true
			},
            data: serializedData
        });
		
 
        // Callback handler that will be called on success
        request.done(function(jqXHR, textStatus, response) {
            // you will get response from your php page (what you echo or print)
             // show successfully for submit message
			
            $("#result").html(response);
        });
 
        // Callback handler that will be called on failure
        request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            // show error
            $("#result").html('There is some error while submit');
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });
 
        return false;
 
    });
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
					 	$('.B').show();
						$('.C').hide();
	                    $('.D').show();
						$('.E').show();
		
						
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
	//create_gang
	$(document).on('click', '#butreg', function(e){
		var username = $('#uname').val();
		var email = $('#email').val();
		var password = $('#pwd').val();
		var Avatar = $('input[id=Avatar]:checked').val();
		if(username!="" && email!="" && password!="" ){
			$.ajax({
				url: "create_action.php",
				type: "POST",
				data: {
					type: 1,
					username: username,
					email: email,
					password: password,	
                    Avatar: Avatar					
				},
				cache: false,
				success: function(dataResult){
					console.log('Response:', dataResult)
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						
						//$('#result').html('Registration successful !'); 
                     $('#butreg').disabled = true;
                     $(".menuitems").load("main_menu.php");
			         socket.auth = { username };
                     socket.connect();
					socket.emit("logged_in",{ id: username, Avatar: Avatar });
					 	$('.B').show();
						$('.C').show();
	                    $('.D').show();
						$('.E').show();
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
		$(document).on('click', '#createGang', function(e){
		var gang_name = $('#gang_name').val();
		var gang_tag = $('#gang_tag').val();
		var gang_motto = $('#gang_motto').val();
		var gang_bio = $('#gang_bio').val();
		if(gang_name!="" && gang_tag!="" && gang_motto!="" && gang_bio!=""){
			$.ajax({
				url: "create_gang_action.php",
				type: "POST",
				data: {
					type: 1,
					gang_name: gang_name,
					gang_tag: gang_tag,
					gang_motto: gang_motto,	
                    gang_bio: gang_bio
				},
				cache: false,
				success: function(dataResult){
					console.log('Response:', dataResult)
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						//$('#result').html('Registration successful !'); 
                     $('#createGang').disabled = true;
                     $(".menuitems").load("gangs.php");
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
			$(document).on('click', '#SaveProfile', function(e){
		var email = $('#email').val();
		var gamertag = $('#gamertag').val();
		var DiscordID = $('#DiscordID').val();
		var gender = $("input[name='gender']:checked").val();
		var website = $('#website').val();
		var bio = $('#bio').val();
		var color = $('#color').val();
		var favemode = $("input[name='favemode']:checked").val();
		var Avatar = $("input[name='Avatar']:checked").val();
		$.ajax({
				url: "customization_action.php",
				type: "POST",
				data: {
					type: 1,
					email: email,
					gamertag: gamertag,
					DiscordID: DiscordID,
					gender: gender,
					website: website,	
                    bio: bio,
					color: color,
					Avatar: Avatar,
					favemode: favemode
				},
				cache: false,
				success: function(dataResult){
					console.log('Response:', dataResult)
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						//$('#result').html('Registration successful !'); 
                     $('#SaveProfile').disabled = true;
					 
                     $(".menuitems").load("customization.php");
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		
	});
    	$(document).on('click', '#saveganginfo', function(e){
		var gang_name = $('#gang_name').val();
		var gang_tag = $('#gang_tag').val();
		var gang_motto = $('#gang_motto').val();
		var gang_bio = $('#gang_bio').val();
		var gang_id = $('#gang_id').val();
		$.ajax({
				url: "gang_info_edit_action.php",
				type: "POST",
				data: {
					type: 1,
					gang_id: gang_id,
					gang_name: gang_name,
					gang_tag: gang_tag,
					gang_motto: gang_motto,	
                    gang_bio: gang_bio
				},
				cache: false,
				success: function(dataResult){
					console.log('Response:', dataResult)
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						//$('#result').html('Registration successful !'); 
                     $('#saveganginfo').disabled = true;
					 
                     $('.menuitems').load('gang_info.php', {'gang_id': gang_id});
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('error');
					}
					
				}
			});
		
	});
	
$(document).ready(function() {
	// $('.I').load('newest_gangs.php');
	// $('.F').load('newest_members.php');
	// $('.C').load('top_stars.php');
	var page = window.location.hash || 'index.php'; 
	var stillAlive = setInterval(function () {
    /* XHR back to server
       Example uses jQuery */
   $.get( "stillAlive.php", function( data ) {
  $('.onlineguests').html(data);
});
}, 60000);
<?php
if (isset($_SESSION['username'])) {
	?>
	username = '<?php echo $_SESSION["username"]; ?>';
	Avatar = '<?php echo $_SESSION["Avatar"]; ?>';
	socket.auth = { username };
  socket.connect();
	socket.emit("logged_in",{ id: username, Avatar: Avatar });
	$('.B').show();
	$('.C').show();
	$('.D').show();
	$('.E').show();
	var content;
$.get('main_menu.php', function(data){
    content = data;
    $('.menuitems').prepend(content);
});
	<?php
	
//echo "$('.menuitems').load('main_menu.php')";  
}
else {
	echo "$('.menuitems').load('login.php')";
}
?>;
    // document is loaded and DOM is ready
});
$(document).on("click", "#members_page", function(){
	   $(".C").show();
       $(".menuitems").load("members.php");
	    window.location.hash = "main_menu.php";
});
$(document).on("click", "#gangs_page", function(){
       $(".menuitems").load("gangs.php");
	    
});
$(document).on("click", "#test2", function(){
       $(".menuitems").load("demo_test2.txt");
});
$(document).on("click", "#main_menu", function(){
       $(".menuitems").load("main_menu.php");

});
$(document).on("click", "#invites", function(){
 $('.menuitems').load("invites.php", function() {
  /* When load is done */

});
   //load() method fetch data from fetch.php page

});
$(document).on("click", "#uploadSnippet", function(){
 $('.M').load("snippets.php", function() {
  /* When load is done */
});
   //load() method fetch data from fetch.php page

});
$(document).on("click", "#gang_leaderboard", function(){
       $(".menuitems").load("gang_leaderboard.php");
});
$(document).on("click", "#gang_info", function(){
       $(".menuitems").load("gang_info.php", {'gang_id': current_gang_id});
	  
});
$(document).on("click", "#gang_list", function(){
       $(".menuitems").load("gang_list.php");
	  
});
$(document).on("click", "#end_gang", function(){
       $(".menuitems").load("end_gang_association.php");
	 
});
$(document).on("click", "#view_profile", function(){
	var profile = $(this).text();
		//$('.C').show();
       $(".menuitems").load("view_profile.php", {'profile': profile});
	   
});
$(document).on("click", "#gang_invite", function(){
	 var $member = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find("#member_display")     // Gets a descendent with class="nr"
                       .text();         // Retrieves the text within <td>
				$.ajax({
				url: "gang_invite_action.php",
				type: "POST",
				data: {
					type: 1,
					from: username,
					to: $member
				},
				cache: false,
				success: function(dataResult){
					console.log('Response:', dataResult)
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						//$('#result').html('Registration successful !'); 
                     
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('problem sending invitation');
					}
					
				}
			});
	
});
$(document).on("click", "#chatroom", function(){
	var profile = $(this).text();
		$('.C').show();
       $(".C").load("chat.php");
	   document.getElementById('chat').scrollIntoView();
});
$(document).on("click", "#create_gang", function(){
       $(".menuitems").load("create_gang.php");
	   $('.C2').show();
		//document.getElementById('.menu').scrollIntoView();
		$("#gang_name").focus();
});
$(document).on("click", "#customize", function(){
       $(".menuitems").load("customization.php");
	   $('.C').show();
		//document.getElementById('.menu').scrollIntoView();
		$("#customization").focus();
});
$(document).on("click", "#uploadScores", function(){
	$('.C').show();
       $(".update_lb").load("update_leaderboards.php");
		//document.getElementById('.menu').scrollIntoView();
});
$(document).on("click", "#resetScores", function(){
	$('.C').show();
       $(".update_lb").load("reset_leaderboards.php");
		//document.getElementById('.menu').scrollIntoView();
});
$(document).on("click", "#Lobby", function(){
	//$( ".menu" ).empty();

	$.getScript( 'scripts/chat.js' )
.done(function( s, Status ) {
	//CreateChannel("%#the\blob", "GE", "welcome to my channel, and enjoy");
	RenderChat("34.226.154.130",
							   6667,
							   ">" + username,
							   "%#The\bLobby",
							   "to be continued");
    console.warn( Status );
		$('.C').show();
		document.getElementById('C').scrollIntoView();
})
.fail(function( jqxhr, settings, exception ) {
    console.warn( "Something went wrong"+exception );
});
});
$(document).on("click", "#create_account", function(){
	
       $(".menuitems").load("create_account.php");
});
$(document).on("click", "#login", function(){

       $(".menuitems").load("login.php");
	   window.location.hash = "login.php";
	   
});
$(document).on("click", "#Leaderboards_page", function(){

       $(".menuitems").load("Leaderboards_menu.php");
	   
});
$(document).on("click", "#kills_leaderboard", function(){
       $(".C").show();
       $(".menuitems").load("kills_leaderboard.php");
	   
});
$(document).on("click", "#deaths_leaderboard", function(){

       $(".C").show();
       $(".menuitems").load("deaths_leaderboard.php");
	   
});
$(document).on("click", "#accuracy_leaderboard", function(){
$(".C").show();
       $(".menuitems").load("accuracy_leaderboard.php");
	   
});
$(document).on("click", "#money_leaderboard", function(){
$(".C").show();
       $(".menuitems").load("money_leaderboard.php");
	   
});
$(document).on('click', '#Upload', function(e){
        e.preventDefault();
        var formData = new FormData($(this).parents('form')[0]);

        $.ajax({
            url: 'upload.php',
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
             //  $('.C').html(data);
			 $('.update_lb').html("");
			   socket.emit('alert_update',{ channelMsg: data });
			  //console.log(data);
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
});

 
 
// Add remove loading class on body element based on Ajax request status
$(document).on({
    ajaxStart: function(){
       $(".overlay").show();
    },
    ajaxStop: function(){
	     $(".overlay").fadeOut("slow");
        //$("body").removeClass("loading");
    }
});
</script>
</head>


<body onresize="myFunction()" onload="startGame()">
<div id='discourse-comments'>
<script>

var myGamePiece;
var myObstacles = [];
var mySound;
var myMusic;
</script>
<div id="VideoDIV">
<video id="vid" width="100%"  height="110%" muted="muted" autoplay>
      <source src="https://tha-rownet.herokuapp.com:3000/videos/kicked.mp4" type="video/mp4" />
	  </video>
	  
</div>
<!-- <img class="image0" src="img/saintsrow_logo.png" />-->
<div class="Container for-resposive-container" id="Container">
<audio id="audio" src="sounds/spawn_01.m4a"></audio>
<!--<img class="image0" src="img/saintsrow_logo.png" />-->
<div class="B">
<div class="onlineguests"></div>
<div class="onlineusers"></div>
</div>
<div class="E redlabel">
</div>
<div class="G redlabel">
</div>
<div id="menu" class="A menu">
<div class="K buttonz">
<input type="image" class="colorizable" id="back" src="images/back-button.png" />
</div>
<div class="menuitems">
</div>
</div>
<div class="M redlabel"></div>
<div class="I redlabel">newest gangs
</div>
<div class="F redlabel">

</div>
<div id="C" class="C">
</div>
<div id="C2" class="C2">
<div class="update_lb"></div>
<div class="stats"></div>
</div>
<div class="D redlabel">
<div class="10">text</div></div>
<div class="J redlabel">
<button id="button">
 <i class=""></i>
</div>
<div class="H redlabel">
<?php
include 'footer.php';
?></div>
</div>
<script>

function myFunction(x) {
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var height = (window.innerHeight > 0) ? window.innerHeight : screen.Height;
 document.getElementById("vid").width = width;
 document.getElementById("vid").height = height;
 //document.getElementById("group").style.width = width;
 //document.getElementById("group").style.height = height;
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
let videoSource = new Array();
videoSource[0] = 'videos/bario_night.mp4';
videoSource[1] = 'videos/chinatown_02.mp4';
videoSource[2] = 'videos/SR_nite_0.mp4';
videoSource[3] = 'videos/SR_rain_01.mp4';
videoSource[4] = 'videos/kicked.webm';
videoSource[5] = 'videos/kickedagain.webm';
videoSource[6] = 'videos/fun.webm';
videoSource[7] = 'videos/loscarnales1.webm';
videoSource[8] = 'videos/loscarnales2.webm';;
limitv = 8;
let i =  Math.floor(Math.random() * (limitv+1)); // global
const videoCount = videoSource.length;
const element = document.getElementById("vid");

function videoPlay(videoNum) {
   console.log(videoNum);
  element.src = "https://tha-row.net/videos/" + videoSource[videoNum];
 
  element.play();

}

element.addEventListener("waiting", function() {
    console.log("video paused");
	//document.getElementById("vid").style.opacity = "0.0"; 
    if ( element.readyState == 4 ) {
            
	 console.log("video has been paused");
    }
});

element.addEventListener('loadeddata', (e) => {
   //Video should now be loaded but we can add a second check

   if(element.readyState >= 3){
       //your code goes here
	   console.log("[loaded data]");
   }

});
element.addEventListener("playing", function() {
    console.log("[Playing] loading of video");
//setTimeout(() => {
  //  document.getElementById("vid").style.opacity = 1;
//}, this.animationDelay + 20);   

    if ( element.readyState == 4 ) {
        console.log("[Finished] loading of video");
    }
});
element.addEventListener("suspend", function(e) {
    console.log("[Suspended] loading of video");
    if ( element.readyState == 4 ) {
        console.log("[Finished] loading of video");
    }
});
document.getElementById('vid').addEventListener('ended', myHandler, false);

videoPlay(i); // play the video
function PlaySound() {
          var sound = document.getElementById("audio");
          sound.play();
      }
function startGame() {
	
	}
function myHandler() {
    i++;
    if (i == videoCount) {
        i = 0;
        videoPlay(i);
    } else {
        videoPlay(i);
    }
}

let music = new Array();
music[0] = 'music/Biz Markie - Pickin Boogers ( With Lyrics ).mp3';
music[1] = 'music/Black Sheep - Flavor Of The Month.mp3';
music[2] = 'music/Take A Walk-Masta Ace-Saints Row Music.mp3';
music[3] = 'music/Wu Tang - SpotLite.mp3';
music[4] = 'music/hustlin_ambiant_01.m4a';
limit = 5;
let z = Math.floor(Math.random() * (limit+1));
music_count = music.length;

 audio = new Audio(music[z]);
 audio.addEventListener('ended',myHandler2, false);
 function myHandler2() {
    z++;
    if (z == music_count) {
        z = 0;
        playmusic(z);
    } else {
        playmusic(z);
    }
}
 function playmusic (z) {
	 audio.pause();
	 audio = new Audio(music[z]);
	 audio.play();
	 audio.volume = 0.2;
 }
const button = document.querySelector("#button");
const icon = document.querySelector("#button > i");
button.addEventListener("click", () => {
  if (audio.paused) {
    audio.volume = 0.2;
    audio.play();
    icon.classList.remove('fa-volume-up');
    icon.classList.add('fa-volume-mute');
    
  } else {
    audio.pause();
    icon.classList.remove('fa-volume-mute');
    icon.classList.add('fa-volume-up');
  }
  button.classList.add("fade");
});

</script>
</div>
</body>
</html>
