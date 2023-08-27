<?php
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
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<link rel="stylesheet" href="css\index2.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Blinker:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="scripts/anchorme.min.js"></script>
<script src="scripts/md5.min.js"></script>
<script src="scripts/register.js"></script>
<script src="scripts/primus-ircjs.bundle.js"></script>
<title>Main Menu</title>
<script>
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
            type: "post",
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
					console.log('Response:', dataResult)
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					//$('#result').html('Logged in!'); 
                     $('#butlogin').disabled = true;
                     $(".menu").load("main_menu.php");
					 $('#loginbox').hide();
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
		var Avatar = $('#Avatar').val();
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
                     $(".menu").load("main_menu.php");
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
		if(gang_name!="" && gang_tag!="" && gang_motto!="" ){
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
                     $('#butreg').disabled = true;
                     $(".menu").load("gangs.php");
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
$(document).ready(function() {
	var stillAlive = setInterval(function () {
    /* XHR back to server
       Example uses jQuery */
   fetch('stillAlive.php?user_id=' + username );
}, 60000);
<?php
if (isset($_SESSION['username'])) {
	?>
	username = '<?php echo $_SESSION["username"]; ?>';
	<?php
	
echo "$('.menuitems').load('main_menu.php')";
}
else {
	echo "$('.menuitems').load('login.php')";
}
?>;
    // document is loaded and DOM is ready
});
$(document).on("click", "#gangs_page", function(){
       $(".menu").load("gangs.php");
});
$(document).on("click", "#test2", function(){
       $(".menu").load("demo_test2.txt");
});
$(document).on("click", "#main_menu", function(){
       $(".menu").load("main_menu.php");
});
$(document).on("click", "#create_gang", function(){
       $(".menu").load("create_gang.php");
});
$(document).on("click", "#Lobby", function(){
	$( ".menu" ).empty();

	$.getScript( 'scripts/chat.js' )
.done(function( s, Status ) {
	RenderChat("irc.irc7.com",
							   6668,
							   ">" + username,
							   "%#Protocol",
							   "to be continued");
    console.warn( Status );
})
.fail(function( jqxhr, settings, exception ) {
    console.warn( "Something went wrong"+exception );
});
});
$(document).on("click", "#create_account", function(){
	
       $(".menu").load("create_account.php");
});
$(document).on("click", "#login", function(){

       $(".menu").load("login.php");
	   
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
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgproperties="fixed" bgcolor="#FFFFFF">
<form method="POST">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1" height="1">
  <tr>
    <td width="9%" height="73" valign="top">
    <img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/main_13.gif" valign="top" align="top" width="374" height="120"></td>
    <td id="loginbox" width="91%" height="72" valign="top">
    <p align="left">
<img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/extend_10.gif" width="100%" height="86"><p align="right">
    Login:
      <input type="text" id="uname" name="uname" size="18" style="font-family: Tahoma; font-size: 8pt; border: 1px solid #DDDDDD; background-color: #F2F2F2">
      <input type="password" id="pwd" name="pwd" size="18" style="font-family: Tahoma; font-size: 8pt; border: 1px solid #DDDDDD; background-color: #F2F2F2">&nbsp;&nbsp;
      <input type="button" value="Login" name="save" id="butlogin" class="btn btn-primary" style="font-family: tahoma; font-size: 8pt; border: 1px solid #DDDDDD; background-color: #F2F2F2"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form></p>
    </td>
  </tr>
  </table>
<table border="0" width="100%" cellpadding="4" class="collapseBorder" id="table1" border="0">
				<tr>
					<td valign="top">&nbsp;<?php echo "Today is " . date("l -› M d, Y");?></td>
				</tr>
				<tr>
					<td height="1" background="/web/20050206224543im_/http://elite-scriptaz.net/images/dotted-line.gif"></td>
				</tr>
				<tr>
				</div>
				<td rowspan="2" width="180" valign="top" nowrap="" height="762">
    <div align="center">
      <center>
      <table style="border-collapse: collapse" id="AutoNumber3" width="100%" height="100%" cellspacing="0" cellpadding="0" bordercolor="#DDDDDD" border="1" bgcolor="#F2F2F2">

        <tbody><tr>
          <td style="border-style: solid; border-width: 1" width="100" height="16" bgcolor="#E6E6E6">
          <p align="left">&nbsp;-<b><font face="Tahoma">› Main</font></b></p></td>
        </tr>
        <tr>
          <td width="100" height="126"><br>
          <table style="border-collapse: collapse" id="AutoNumber5" width="174%" height="125" cellspacing="0" cellpadding="0" bordercolor="#111111" border="0">
            <tbody><tr>
              <td>
          <font face="Tahoma">&nbsp; › <a href="index.php?module=begin">Home</a></font></td>
            </tr>
            <tr>
              <td>
          <font face="Tahoma"> 
          &nbsp; › <a href="index.php?module=funnylogs">Stupid Logs</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="14">
          <font face="Tahoma"> 
          &nbsp; › <a href="index.php?module=portfolio">Portfolio</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="14">
          <font face="Tahoma"> 
          &nbsp; › 
      <a href="index.php?module=staff">Staff</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="13">
          <font face="Tahoma"> 
        &nbsp; ›
        <a href="index.php?module=signup">Site Signup</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="9">
          <font face="Tahoma"> 

        &nbsp; ›
        <a href="index.php?module=forgot_password">Forgot Password?</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="13">
          <font face="Tahoma"> 

        &nbsp; ›
        <a href="index.php?module=email_signup">E-Mail Signup</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="14">
          <font face="Tahoma"> 
          &nbsp; ›
          <a href="index.php?module=new_forum">Forum</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="7">
          <font face="Tahoma"> 
          &nbsp; ›
          <a href="index.php?module=members">Members</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="14">
          <font face="Tahoma"> 
          &nbsp; ›
          <a href="index.php?module=contact">Contact</a></font></td>
            </tr>
            <tr>
              <td class="menulines" width="100%" height="1">
          <font face="Tahoma"> 
        &nbsp; ›
        <a href="index.php?module=irc_info">
        IRC Server Status</a></font> </td>
            </tr>
          </tbody></table><br>
          </td>
        </tr>
        <tr>
          <td width="100" height="18" bgcolor="#E6E6E6">
          &nbsp;-<b><font face="Tahoma">› Scripting</font></b></td>
        </tr>
        <tr>
          <td width="100" height="126">
          <br>
          <font face="Tahoma"> 
          &nbsp; ›
      <a href="index.php?module=scripts">
      Scripts</a><br>
        &nbsp; ›
        <a href="index.php?module=addons">
      Addons</a><br>
        &nbsp; ›
        <a href="index.php?module=tutorials">
      Tutorials</a><br>
       &nbsp; ›
      <a href="index.php?module=snippets">
      Snippets</a><br>
        &nbsp; ›
        <a href="index.php?module=themes">
      Themes</a><br>
        &nbsp; ›
        <a href="index.php?module=dlls">
        DLLs</a><br>
        &nbsp; ›
        <a href="index.php?module=numerics">
      Numerics</a></font><br>
      <font face="Tahoma" color="#000000"> 
       &nbsp; ›
      <a href="index.php?module=phpscripts">
      PHP Scripts</a></font><br>
       &nbsp; ›
      <a href="index.php?module=submit_file">
      Submit File</a><br>
&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="17" bgcolor="#E6E6E6">
          &nbsp;-<b><font face="Tahoma">› Interactive</font></b></td>
        </tr>
        <tr>
          <td width="100" height="108">
          <font face="Tahoma"> 
          &nbsp;<br>
            &nbsp; ›
            <a href="index.php?module=webpoll">Web 
            Poll</a><br>
            &nbsp; ›
            <a href="index.php?module=screenshot_view&amp;page=1">Screenshots</a><br>
        &nbsp; › <a href="index.php?module=screenshot_upload">Post 
          Screenshot</a><br>
        &nbsp; ›
        <a href="index.php?module=url">
        URL Redirection</a><br>
            &nbsp; ›
            <a href="index.php?module=affiliates">Affiliates</a><br>
            &nbsp; ›
    <a href="index.php?module=portfolio">Graphics</a><br>
            &nbsp; ›
            <a href="index.php?module=linkback">Link Back</a><br>
            &nbsp; › 
      <a href="index.php?module=records"> 
            Records/Bloopers<br>
            </a>&nbsp; ›
            <a href="index.php?module=eggs"> 
            Easter Eggs</a><br>&nbsp; ›
            <a href="index.php?module=file_queue"> 
            File Queue</a><br>
             &nbsp; ›
            <a href="index.php?module=new_forum"> 
            Interactive Forum</a> <br>
       &nbsp; ›
      <a href="index.php?module=submit_file">
      Submit File</a></font><br>
&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="18" bgcolor="#E6E6E6">
          &nbsp;-<b><font face="Tahoma">› Main Partners</font></b></td>
        </tr>
        <tr>
          <td width="100%" valign="top" height="100%">
          &nbsp; <br>
&nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://tewlzbox.org/" target="_blank"><img src="/web/20030924212509im_/http://elite-scriptaz.net/images/tewlzbox.gif" width="88" height="33" border="0"></a>
          <br>
          &nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://www32.brinkster.com/dweep/news_display.asp" target="_blank"><img src="/web/20030924212509im_/http://elite-scriptaz.net/images/wheresmynoodle.gif" width="88" height="31" border="0"></a>
          <br>
          &nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://krx.us/" target="_blank"><img src="/web/20030924212509im_/http://elite-scriptaz.net/images/para.gif" width="88" height="31" border="0"></a>
          <br>
          &nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://www.batto.creativevisionz.com/" target="_blank"><img src="/web/20030924212509im_/http://elite-scriptaz.net/images/batto1.gif" width="88" height="31" border="0"></a></td>
          
        </tr>
      </tbody></table>
      </center>
    </div>
    </td>
					<td height="100%" valign="top">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber1">
    <tr>
      <td width="100%">-› Welcome to the site.<br> -› Online Users (<?php echo $number_of_online_members;?> members, <?php echo $number_of_online_guests;?> guests): <?php echo $linefeed;?>

</td>
</div>
</tr>
</table>
</table>
</table>
</div>
</div>
<script>

function myFunction(x) {
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var height = (window.innerHeight > 0) ? window.innerHeight : screen.Height;
 document.getElementById("group").style.width = width;
 document.getElementById("group").style.height = height;
}
</script>
</body>
</html>
