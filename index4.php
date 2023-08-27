<html>

<head>

<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Elite-Scriptaz.NET - Taking mIRC Scripting.. To the extreme!</title>
<script language="JavaScript1.2">

function high(which2){
theobject=which2
highlighting=setInterval("highlightit(theobject)",50)
}
function low(which2){
clearInterval(highlighting)
if (which2.style.MozOpacity)
which2.style.MozOpacity=0.3
else if (which2.filters)
which2.filters.alpha.opacity=30
}

function highlightit(cur2){
if (cur2.style.MozOpacity<1)
cur2.style.MozOpacity=parseFloat(cur2.style.MozOpacity)+0.1
else if (cur2.filters&&cur2.filters.alpha.opacity<100)
cur2.filters.alpha.opacity+=10
else if (window.highlighting)
clearInterval(highlighting)
}

</script>
<style>
A:link { COLOR: #000000; TEXT-DECORATION: none }
A:visited { COLOR: #000000; TEXT-DECORATION: none }
A:hover { COLOR: #073C78; TEXT-DECORATION: underline }

table {
  font-family:tahoma;
  font-size:8pt;
  color: #000000;
}
BODY { 
SCROLLBAR-ARROW-COLOR:#DDDDDD;
SCROLLBAR-BASE-COLOR:#CCCCCC;
SCROLLBAR-DARKSHADOW-COLOR:#DDDDDD;
SCROLLBAR-FACE-COLOR:#EEEEEE;
SCROLLBAR-HIGHLIGHT-COLOR:#DDDDDD;
SCROLLBAR-SHADOW-COLOR:#BBBBBB;
SCROLLBAR-TRACK-COLOR:#FFFFFF;}
</style>
<style>
.menulines{
border:1px solid #f1f1f1;
}

.menulines a{
text-decoration:none;
color:#000000;
}
</style>

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgproperties="fixed" bgcolor="#FFFFFF">
<form method="POST" action="index.php">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1" height="1">
  <tr>
    <td width="9%" height="73" valign="top">
    <img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/main_13.gif" valign="top" align="top" width="374" height="120"></td>
    <td width="91%" height="72" valign="top">
    <p align="left">
<img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/extend_10.gif" width="100%" height="86"><p align="right">
    Login:
      <input type="text" name="name" size="18" style="font-family: Tahoma; font-size: 8pt; border: 1px solid #DDDDDD; background-color: #F2F2F2">
      <input type="password" name="passwd" size="18" style="font-family: Tahoma; font-size: 8pt; border: 1px solid #DDDDDD; background-color: #F2F2F2">&nbsp;&nbsp;
      <input type="submit" value="Login" name="submit" style="font-family: tahoma; font-size: 8pt; border: 1px solid #DDDDDD; background-color: #F2F2F2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form></p>
    </td>
  </tr>
  </table>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2" height="624">
  <tr>
    <td width="180" height="762" valign="top" nowrap rowspan="2">
    <div align="center">
      <center>
      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="100%" id="AutoNumber3" bgcolor="#F2F2F2" height="100%">

        <tr>
          <td width="100" height="16" style="border-style: solid; border-width: 1" bgcolor="#E6E6E6">
          <p align="left">&nbsp;-<b><font face="Tahoma">› Main</font></b></td>
        </tr>
        <tr>
          <td width="100" height="126"><br>
          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="174%" id="AutoNumber5" height="125">
            <tr>
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
          </table><br>
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
      Submit File</a></font><br>
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
          <td width="100%" height="100%" valign="top">
          &nbsp; <br>
&nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://tewlzbox.org/" target="_blank"><img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/tewlzbox.gif" width="88" height="33"></a>
          <br>
          &nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://www32.brinkster.com/dweep/news_display.asp" target="_blank"><img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/wheresmynoodle.gif" width="88" height="31"></a>
          <br>
          &nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://krx.us/" target="_blank"><img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/para.gif" width="88" height="31"></a>
          <br>
          &nbsp;
          <a href="http://web.archive.org/web/20030924212509/http://www.batto.creativevisionz.com/" target="_blank"><img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/images/batto1.gif" width="88" height="31"></a></td>
          
        </tr>
      </table>
      </center>
    </div>
    </td>
    <td width="88%" height="752" valign="top">
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber5" height="100%">
        <tr>
          <td width="84%" height="518" valign="top">
    
<div align="center">
  <center>
  <p><br>


<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber1">
    <tr>
      <td width="100%">-› Design/PHP Coded by <a href="index.php?module=viewprofile&amp;user=neox">neox</a> (<a href="http://web.archive.org/web/20030924212509/mailto:neox@elite-scriptaz.net?subject=elite-scriptaz">neox@elite-scriptaz.net</a>)<br> -› Online Users (5 members, 12 guests):  <a href="index.php?module=viewprofile&amp;user=Dallas">Dallas</a>,  <a href="index.php?module=viewprofile&amp;user=poopmcflurry">poopmcflurry</a>,  <a href="index.php?module=viewprofile&amp;user=neox">neox</a>,  <a href="index.php?module=viewprofile&amp;user=neukortex">neukortex</a>,  <a href="index.php?module=viewprofile&amp;user=outlawx">outlawx</a>, <br>

<script language="JavaScript1.2">
<!--
var correctwidth=1024
var correctheight=768
if (screen.width<correctwidth||screen.height<correctheight)
document.write("-› Site is not being viewed correctly, please set your resolution to "+correctwidth+"x"+correctheight+" <br>-› Your current resolution is "+screen.width+"x"+screen.height+".")
//-->
</script>

</td>
    </tr>
  </table>
  </center>
</div><br>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber1">
    <tr>
      <td width="100%">-› Latest Content</td>
    </tr>
  </table>
  </center>
</div>
<table width="95%" height="50" bgcolor="#F9F9F9" border="1" style="border-collapse: collapse" bordercolor="#DDDDDD">
    <tr>
      <td width="100%" height="50" valign="top" style="padding: 3px;">
        <div style="height: 180px; overflow: auto;"><style>

A:link { COLOR: #000000; TEXT-DECORATION: none }
A:visited { COLOR: #000000; TEXT-DECORATION: none }
A:hover { COLOR: #073C78; TEXT-DECORATION: underline }

table {
  font-family:tahoma;
  font-size:8pt;
  color: #000000;
}
BODY { 
SCROLLBAR-ARROW-COLOR:#000000;
SCROLLBAR-BASE-COLOR:#CCCCCC;
SCROLLBAR-DARKSHADOW-COLOR:#DDDDDD;
SCROLLBAR-FACE-COLOR:#EEEEEE;
SCROLLBAR-HIGHLIGHT-COLOR:#DDDDDD;
SCROLLBAR-SHADOW-COLOR:#BBBBBB;
SCROLLBAR-TRACK-COLOR:#FFFFFF;}
</style>

<body bgcolor="#F9F9F9">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="100%">
-<font face="Tahoma">› <u>September 22, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1064280164"><u>Mode Dialog V.1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 21, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1064188820"><u>Away System V.2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 15, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Snippet</font>) <u><a href="index.php?module=snippet_comments&amp;id=1063673942"><u>$bdtok</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Kristofer"><font color="#5F697C">Kristofer</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Snippet</font>) <u><a href="index.php?module=snippet_comments&amp;id=1063627483"><u>$altok</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Kristofer"><font color="#5F697C">Kristofer</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 12, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063357123"><u>System info</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=X-FILE"><font color="#5F697C">X-FILE</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 11, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063309704"><u>Alignd theme helper</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=d3ath_X"><font color="#5F697C">d3ath_X</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 10, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063239036"><u>Master Dialog V.1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063235005"><u>Vincula Sidebar</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1063228970"><u>Vincula Sidebar</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063225186"><u>prop dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 09, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063163476"><u>Kick/ban Dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Dre`"><font color="#5F697C">Dre`</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 08, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1063061424"><u>ExcurZ|on v1.0</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=-W|nd"><font color="#5F697C">-W|nd</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1063057932"><u>QuickChat v2.0 for mIRC 6.03</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=cyborg"><font color="#5F697C">cyborg</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1063033647"><u>OpList</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=RacerX"><font color="#5F697C">RacerX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 06, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1062877338"><u>Favorite url manager</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Ocioso"><font color="#5F697C">Ocioso</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 04, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1062730069"><u>aop list (updated)</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=executioner^"><font color="#5F697C">executioner^</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1062698496"><u>Favorite Url Manager</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=kryox"><font color="#5F697C">kryox</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1062676681"><u>AnacønÐa NS 1.65</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=solidsnake"><font color="#5F697C">solidsnake</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>September 03, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1062618985"><u>xvision MSN connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=kinetix"><font color="#5F697C">kinetix</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 22, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061537242"><u>access dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=wingx"><font color="#5F697C">wingx</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 21, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061490857"><u>mode dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Wingx"><font color="#5F697C">Wingx</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 20, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061413087"><u>clone scanner</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zor1x"><font color="#5F697C">zor1x</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061408826"><u>Away System V.1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=electricX"><font color="#5F697C">electricX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 19, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Snippet</font>) <u><a href="index.php?module=snippet_comments&amp;id=1061336373"><u>Nick Completion</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 17, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061115153"><u>Kick/Ban/Deop Protections</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=makler"><font color="#5F697C">makler</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1061102943"><u>merkFX v1.0</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=[AFX]"><font color="#5F697C">[AFX]</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 16, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061045545"><u>gettok Room dialog 1.0</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=gettok"><font color="#5F697C">gettok</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1061040774"><u>Away system</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=koolman"><font color="#5F697C">koolman</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 15, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060998706"><u>Mode Dialog v2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Pogo"><font color="#5F697C">Pogo</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060978058"><u>Banlist</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=50``"><font color="#5F697C">50``</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 14, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060873543"><u>Zyn0x` Addonz v1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Zyn0x`"><font color="#5F697C">Zyn0x`</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 13, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060827469"><u>Mode Dialog V1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Pogo"><font color="#5F697C">Pogo</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060826939"><u>Google Dialog V2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Pogo"><font color="#5F697C">Pogo</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060795982"><u>DCC bot</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=enzyme"><font color="#5F697C">enzyme</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060788025"><u>kick counter</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zor1x"><font color="#5F697C">zor1x</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060786530"><u>IrcLink 2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=cypher"><font color="#5F697C">cypher</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 12, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060708721"><u>ChickenX INI Userlist</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=enzyme"><font color="#5F697C">enzyme</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060693505"><u>Theme Creator 2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=MaTt`"><font color="#5F697C">MaTt`</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Tutorial</font>) <u><a href="index.php?module=tutorial_comments&amp;id=1060689644"><u>Fix For w32blasterworm</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=John."><font color="#5F697C">John.</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060683195"><u>Nickname Join Flood Protection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=gettok"><font color="#5F697C">gettok</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 11, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060653592"><u>Sockbot V.1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=50``"><font color="#5F697C">50``</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060652583"><u>Technot</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=50``"><font color="#5F697C">50``</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060636360"><u>Windz-Gatekeeper-NickRecorder</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=-W|nd"><font color="#5F697C">-W|nd</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060636199"><u>Windz-Mode-Dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=-W|nd"><font color="#5F697C">-W|nd</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060628996"><u>DizRuPtaTion 1.0</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=-W|nd"><font color="#5F697C">-W|nd</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060628860"><u>Disturbed v2.0</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zBrute"><font color="#5F697C">zBrute</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060619784"><u>Away syestem</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=50``"><font color="#5F697C">50``</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060619261"><u>Sharp`</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=50``"><font color="#5F697C">50``</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 10, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Tutorial</font>) <u><a href="index.php?module=tutorial_comments&amp;id=1060536723"><u>Securing your windows OS</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=oblivion"><font color="#5F697C">oblivion</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060521168"><u>Rediceaddonz1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=straightuip"><font color="#5F697C">straightuip</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060520581"><u>ChickenX Con Working</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=enzyme"><font color="#5F697C">enzyme</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 09, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060425339"><u>Working ChickenX Con</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=enzyme"><font color="#5F697C">enzyme</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060414055"><u>Disturbed Connection v1.2..fixed</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zBrute"><font color="#5F697C">zBrute</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060406750"><u>Google Dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Pogo"><font color="#5F697C">Pogo</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 08, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1060380302"><u>exenon connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=sn0wX"><font color="#5F697C">sn0wX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1060375339"><u>Direx .. fixed</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Sid"><font color="#5F697C">Sid</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 04, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Tutorial</font>) <u><a href="index.php?module=tutorial_comments&amp;id=1060020435"><u>How to Block Netsend Popup Ads</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Toyz"><font color="#5F697C">Toyz</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 03, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1059967500"><u>Custom Toolbar</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Rap2x"><font color="#5F697C">Rap2x</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>August 02, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1059820504"><u>Simple AMP</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=pr0nking"><font color="#5F697C">pr0nking</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 31, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1059683708"><u>Msg replyer</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Theme</font>) <u><a href="index.php?module=theme_comments&amp;id=1059657367"><u>WebChat Theme</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=[8]-Ball"><font color="#5F697C">[8]-Ball</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 30, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1059621577"><u>Disturbed Connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zBrute"><font color="#5F697C">zBrute</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 25, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1059127324"><u>Disturbed Connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zBrute"><font color="#5F697C">zBrute</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 24, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1059022459"><u>a.op list</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=executioner^"><font color="#5F697C">executioner^</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 22, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Tutorial</font>) <u><a href="index.php?module=tutorial_comments&amp;id=1058890763"><u>Facts about ripping</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=fate"><font color="#5F697C">fate</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 17, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1058450495"><u>popup away system</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=absinthe"><font color="#5F697C">absinthe</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 16, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1058343569"><u>Nick Completion</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 15, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Tutorial</font>) <u><a href="index.php?module=tutorial_comments&amp;id=1058309227"><u>MDX Toolbar Tutorial</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=tek"><font color="#5F697C">tek</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1058281424"><u>echox v1.0</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=eammon"><font color="#5F697C">eammon</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Tutorial</font>) <u><a href="index.php?module=tutorial_comments&amp;id=1058251241"><u>Changing IP Address</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1058251239"><u>evilds ripped cypher split</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Josh"><font color="#5F697C">Josh</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 14, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1058186960"><u>echox v1.0 connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=eammon"><font color="#5F697C">eammon</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 13, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1058120126"><u>Blitzkrieg Connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Fate"><font color="#5F697C">Fate</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1058068934"><u>Switchbar Addon v2.0a</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Jynx"><font color="#5F697C">Jynx</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 12, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1058041959"><u>Direx</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Sid"><font color="#5F697C">Sid</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 10, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1057859091"><u>ChickenX Connection</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=enzyme"><font color="#5F697C">enzyme</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 09, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057742613"><u>Elegance</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=amanda"><font color="#5F697C">amanda</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 08, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057704165"><u>Rap2x Mp3</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Rap2x"><font color="#5F697C">Rap2x</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 06, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057530888"><u>Channel List</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Rap2x"><font color="#5F697C">Rap2x</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 05, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057408658"><u>nice statusbar</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 03, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1057279491"><u>sIRC V2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=[-maverick-]"><font color="#5F697C">[-maverick-]</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1057279432"><u>NoNameScript</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=greeny &amp; mute"><font color="#5F697C">greeny &amp; mute</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1057279422"><u>fractalsm</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Tig0ti"><font color="#5F697C">Tig0ti</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1057279402"><u>Chaos 2.3.2</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Morphy"><font color="#5F697C">Morphy</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267847"><u>CloneScan (irc)</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267827"><u>Media Player</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=airliner"><font color="#5F697C">airliner</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267817"><u>Color</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=airliner"><font color="#5F697C">airliner</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267807"><u>TCP Kill</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=AcidKodeX"><font color="#5F697C">AcidKodeX</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267797"><u>Talker</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Luke"><font color="#5F697C">Luke</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267787"><u>BoxStats v1.0a</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Slakker"><font color="#5F697C">Slakker</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267777"><u>Nicklist Dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Axxess"><font color="#5F697C">Axxess</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267702"><u>Nickname Completer</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=LaZeR"><font color="#5F697C">LaZeR</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267692"><u>Font Changer</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zai0s"><font color="#5F697C">zai0s</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267682"><u>Away System</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=eXosis"><font color="#5F697C">eXosis</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267672"><u>Mp3 Player</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=exe"><font color="#5F697C">exe</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267662"><u>Access Dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zai0s"><font color="#5F697C">zai0s</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057267652"><u>Port Scanner</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Kryptix"><font color="#5F697C">Kryptix</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>July 02, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1057170885"><u>Anthrax Away System</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=PsycoLudwik"><font color="#5F697C">PsycoLudwik</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 26, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056643345"><u>Userlist Dialog</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=kryox"><font color="#5F697C">kryox</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 23, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056391905"><u>Calculator</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056391609"><u>Fkey</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056383007"><u>autojoin</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056357602"><u>autocolor</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 20, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056098623"><u>xServ</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zeeg"><font color="#5F697C">zeeg</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056098545"><u>xStats</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zeeg"><font color="#5F697C">zeeg</a></font><br>
  </tr>

  <tr>
    <td width="100%">
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1056098460"><u>xSearch</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=zeeg"><font color="#5F697C">zeeg</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 17, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1055878013"><u>Trojan Script by 0ne`</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=0ne`"><font color="#5F697C">0ne`</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 16, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1055765602"><u>Dcc Info Display</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Meth2k"><font color="#5F697C">Meth2k</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 14, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1055587238"><u>autocolor</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Imation"><font color="#5F697C">Imation</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 12, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Addon</font>) <u><a href="index.php?module=addon_comments&amp;id=1055416503"><u>Switchbar (Addon)</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Sid"><font color="#5F697C">Sid</a></font><br>
  </tr>

  <tr>
    <td width="100%">
<br>-<font face="Tahoma">› <u>June 11, 2003</u><br>
&nbsp;&nbsp;&nbsp; › (<font color="#5F697C">Script</font>) <u><a href="index.php?module=script_comments&amp;id=1055334391"><u>r00t v1.1</u></a></u> 
    submitted by <a href="index.php?module=viewprofile&amp;user=Sid"><font color="#5F697C">Sid</a></font><br>
  </tr>

</table></div>
      </td>
   </tr>
</table>

<br>
  <hr width="75%" color="#DDDDDD" size="1">
<br>
  </center>
</div>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber1">
    <tr>
      <td width="100%">-› Latest News</td>
    </tr>
  </table>
  </center>
</div>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="93">
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="17">&nbsp;-<font face="Tahoma">› 
      <a href="index.php?module=news_comments&amp;id=1064361425"><u>MSN Ways gone as of Oct. 14</u></a> (Views: 41/Last View: <a href="index.php?module=viewprofile&amp;user=neox">neox</a>/Last Comment: <a href="index.php?module=viewprofile&amp;user=Steve`">Steve`</a>)


</font></td>
    </tr>
    <tr>
      <td width="100%" height="61">
      <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="100%">
        <tr>
          <td width="96%">This site will be undergoing a big change in october, like many others.  MSN is doing away with much of their international chats, and are going to make a creditcard subscription needed, or only allow users to chat in moderated chatrooms in us/uk chats.  On the bright side .. if there is one.. DigitalfuseNET will be returning in early october in-case this change does take effect.</td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="13">
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="48%">Posted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font> on 09/23/03<font color="#5F697C"><b> @ </b></font>07:58pm EST</td>
    <td width="52%">
    <p align="right"><a href="index.php?module=news_comments&amp;id=1064361425">Comments(12)</a></td>
  </tr>
</table>
</td>
    </tr>
  </table><br>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="93">
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="17">&nbsp;-<font face="Tahoma">› 
      <a href="index.php?module=news_comments&amp;id=1064002874"><u>No Updates</u></a> (Views: 60/Last View: <a href="index.php?module=viewprofile&amp;user=Dallas">Dallas</a>/Last Comment: <a href="index.php?module=viewprofile&amp;user=evo">evo</a>)


</font></td>
    </tr>
    <tr>
      <td width="100%" height="61">
      <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="100%">
        <tr>
          <td width="96%">Lately i've been working more on my script than the site, so thats why there havent been many updates.<br/>
<br/>
People, start submitting screenshots.. of anything, even pictures. I will probably work more on the site this weekend, but I dont know what on.  Tell me what you want added to the site, again. Reply to this news article.</td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="13">
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="48%">Posted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font> on 09/19/03<font color="#5F697C"><b> @ </b></font>04:22pm EST</td>
    <td width="52%">
    <p align="right"><a href="index.php?module=news_comments&amp;id=1064002874">Comments(10)</a></td>
  </tr>
</table>
</td>
    </tr>
  </table><br>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="93">
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="17">&nbsp;-<font face="Tahoma">› 
      <a href="index.php?module=news_comments&amp;id=1062862851"><u>Webserver Change</u></a> (Views: 33/Last View: <a href="index.php?module=viewprofile&amp;user=Dimensi0nal">Dimensi0nal</a>/Last Comment: <a href="index.php?module=viewprofile&amp;user=zor1x">zor1x</a>)


</font></td>
    </tr>
    <tr>
      <td width="100%" height="61">
      <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="100%">
        <tr>
          <td width="96%">Today I changed over to apache webserver, which is about 100x more stable than the one I was using before.   There will also be some speed updates within the next couple of weeks, currenting looking for a 3mbps/upload business class internet service providor.</td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="13">
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="48%">Posted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font> on 09/06/03<font color="#5F697C"><b> @ </b></font>11:41am EST</td>
    <td width="52%">
    <p align="right"><a href="index.php?module=news_comments&amp;id=1062862851">Comments(3)</a></td>
  </tr>
</table>
</td>
    </tr>
  </table><br>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="93">
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="17">&nbsp;-<font face="Tahoma">› 
      <a href="index.php?module=news_comments&amp;id=1061617150"><u>Downtime?</u></a> (Views: 31/Last View: <a href="index.php?module=viewprofile&amp;user=oblivion">oblivion</a>/Last Comment: <a href="index.php?module=viewprofile&amp;user=Karyo~">Karyo~</a>)


</font></td>
    </tr>
    <tr>
      <td width="100%" height="61">
      <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="100%">
        <tr>
          <td width="96%">Over the next couple of days the site <u>might</u> be down, Im going to switch server providors. After this step is over the site should be up 24/7 again.<br/>
<br/>
Server has undergone mass-updates, might do more later depending on how well it preforms through the next few hours. It is expected to be up 24/7 as of now.</td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="13">
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="48%">Posted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font> on 08/23/03<font color="#5F697C"><b> @ </b></font>01:40am EST</td>
    <td width="52%">
    <p align="right"><a href="index.php?module=news_comments&amp;id=1061617150">Comments(4)</a></td>
  </tr>
</table>
</td>
    </tr>
  </table><br>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="93">
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="17">&nbsp;-<font face="Tahoma">› 
      <a href="index.php?module=news_comments&amp;id=1061338763"><u>Snippets/Themes</u></a> (Views: 2/Last View: <a href="index.php?module=viewprofile&amp;user=er0x">er0x</a>/Last Comment: <a href="index.php?module=viewprofile&amp;user=None">None</a>)


</font></td>
    </tr>
    <tr>
      <td width="100%" height="61">
      <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="100%">
        <tr>
<td width="4%"><img border="0" src="/web/20030924212509im_/http://elite-scriptaz.net/news/1061338763.jpg" width="101" height="91"></td>          <td width="96%">The snippets, and themes sections are up, you can now submit files. I will be getting numerics up also, along with another couple of sections.<br/>
<br/>
Aug 20: Downtime today wasnt servers fault, upstream providor went down for about 2 hours.</td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="13">
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="48%">Posted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font> on 08/19/03<font color="#5F697C"><b> @ </b></font>08:20pm EST</td>
    <td width="52%">
    <p align="right"><a href="index.php?module=news_comments&amp;id=1061338763">Comments(0)</a></td>
  </tr>
</table>
</td>
    </tr>
  </table><br>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="93">
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="17">&nbsp;-<font face="Tahoma">› 
      <a href="index.php?module=news_comments&amp;id=1061276772"><u>What is next?</u></a> (Views: 63/Last View: <a href="index.php?module=viewprofile&amp;user=eid0s">eid0s</a>/Last Comment: <a href="index.php?module=viewprofile&amp;user=eid0s">eid0s</a>)


</font></td>
    </tr>
    <tr>
      <td width="100%" height="61">
      <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="100%">
        <tr>
          <td width="96%">I've made about everything that I can think of, I need to finish up some of the sections, but what else do you people want to see?<br/>
<br/>
Also: All past screenshot ratings have been dropped, due to the table crashing basicly.. If i wanted to I could get them back, But I dont see a big need..<br/>
<br/>
8/19: The webserver has been update, hopfully to prevent any future downtime.<br/>
<br/>
Have any ideas? Reply to this news article.</td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#F1F1F1" height="13">
<table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="48%">Posted by <a href="index.php?module=viewprofile&amp;user=neox"><font color="#5F697C">neox</a></font> on 08/19/03<font color="#5F697C"><b> @ </b></font>03:07am EST</td>
    <td width="52%">
    <p align="right"><a href="index.php?module=news_comments&amp;id=1061276772">Comments(15)</a></td>
  </tr>
</table>
</td>
    </tr>
  </table><br>
<p align="center">
&nbsp;<hr width="75%" color="#DDDDDD" size="1"></p>
  </center>
</div>
  <table border="1" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#DDDDDD" width="95%" id="AutoNumber12" height="86">
    <tr>
      </td>
    </tr>
  </table>
          </td>
          <td width="180" height="518" valign="top" nowrap rowspan="2"><br>
<form method="POST" action="index.php?module=webpoll">
                                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="97%" id="AutoNumber6" height="174">
                                    <tr>
                                      <td width="100%" bgcolor="#F2F2F2" height="4">
                                      &nbsp;-<font face="Tahoma">› Recent Comments</font></td>
                                    </tr>
                                    <tr>
                                      <td width="100%" height="169">
                                                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#111111" width="98%" id="AutoNumber17" height="131">
              <tr>
                <td width="61%" height="13">&nbsp;1. <a href="view_screenshot.php?id=1064434017">Latest script</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=poopmcflurry">poopmcflurry</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;2. <a href="view_screenshot.php?id=1064402163">Blueline 3.0..</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=neox">neox</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;3. <a href="view_screenshot.php?id=1064282370">Genocide/der..</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=outlawx">outlawx</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;4. <a href="view_screenshot.php?id=1064434017">Latest script</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=An3mia">An3mia</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;5. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=neukortex">neukortex</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;6. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=eid0s">eid0s</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;7. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=oracle">oracle</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;8. <a href="view_screenshot.php?id=1064434017">Latest script</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=oracle">oracle</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;9. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=eid0s">eid0s</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;10. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=Steve`">Steve`</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;11. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=Ryan-">Ryan-</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;12. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=CynDiKiTzx`">CynDiKiTzx`</a></td>
              </tr>
              <tr>
                <td width="61%" height="13">&nbsp;13. <a href="view_screenshot.php?id=1064409252">my mirc kids</a></td>
                <td width="39%" height="13" align="right"><a href="index.php?module=viewprofile&amp;user=Ryan-">Ryan-</a></td>
              </tr>
            </table>
            </td>
         </tr>
          </table><br>
          <p>
          <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="97%" id="AutoNumber26">
              <tr>
                <td width="100%" bgcolor="#F1F1F1" &nbsp;-<font face="Tahoma">&nbsp;-› 
                Web Poll - 107 Total Votes</font></td>
              </tr>
              <tr>
                <td width="100%">&nbsp;Computer Brand?<br>
                &nbsp;<b><table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#111111" width="100%" id="AutoNumber18" height="45">
                <tr>
                  <td width="74%" height="13">Option</td>
                  <td width="26%" height="13">Percentage</td>
                </tr>
                <tr>
                  <td width="74%" height="4">Dell</td>
                  <td width="26%" height="4">
                  <p align="right">11(10%)</td>
                </tr>
                <tr>
                  <td width="100%" height="7" colspan="2">
                  <div align="center">
                    <center>
                    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#F1F1F1" width="100%" id="AutoNumber19">
                      <tr>
                        <td width="100%">
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="10%" height="11"></td>
                      </tr>
                    </table>
                    </center>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td width="74%" height="7">Gateway</td>
                  <td width="26%" height="7" align="right">3(3%)</td>
                </tr>
                <tr>
                  <td width="100%" height="7" colspan="2">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#F1F1F1" width="100%" id="AutoNumber20">
                    <tr>
                      <td width="100%">
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="3%" height="11"></td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="74%" height="7">IBM</td>
                  <td width="26%" height="7" align="right">6(6%)</td>
                </tr>
                <tr>
                  <td width="100%" height="7" colspan="2">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#F1F1F1" width="100%" id="AutoNumber21">
                    <tr>
                      <td width="100%">
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="6%" height="11"></td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="74%" height="6">Apple/Mac</td>
                  <td width="26%" height="6" align="right">3(3%)</td>
                </tr>
                <tr>
                  <td width="100%" height="6" colspan="2">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#F1F1F1" width="100%" id="AutoNumber22">
                    <tr>
                      <td width="100%">
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="3%" height="11"></td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="53%" height="4">Compaq</td>
                  <td width="47%" height="4" align="right">12(11%)</td>
                </tr>
                <tr>
                  <td width="100%" height="15" colspan="2">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#F1F1F1" width="100%" id="AutoNumber23" height="9">
                    <tr>
                      <td width="100%" height="9">
                <div align="center">
                  <center>
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#F1F1F1" width="100%" id="AutoNumber30">
                    <tr>
                      <td width="100%" height="1">
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="11%" height="11"></td>
                    </tr>
                  </table>
                  </center>
                </div>
                      </td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="65%" height="8">Custom Make</td>
                  <td width="35%" height="8">
                  <p align="right">47(44%)</td>
                </tr>
                <tr>
                  <td width="100%" height="5" colspan="2">
                  <div align="center">
                    <center>
                    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#F1F1F1" width="100%" id="AutoNumber31">
                      <tr>
                        <td width="100%">
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="44%" height="11"></td>
                      </tr>
                    </table>
                    </center>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td width="65%" height="3">Other</td>
                  <td width="35%" height="3">
                  <p align="right">25(23%)</td>
                </tr>
                <tr>
                  <td width="100%" height="6" colspan="2">
                  <div align="center">
                    <center>
                    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#F1F1F1" width="100%" id="AutoNumber29">
                      <tr>
                        <td width="100%"><b>
                <img src="/web/20030924212509im_/http://elite-scriptaz.net/images/poll_bar_small.gif" width="23%" height="11"></td>
                      </tr>
                    </table>
                    </center>
                  </div>
                  </td>
                </tr>
              </table>
              
                  </center>
                </div>
            </td>
  </tr>
</table>
<br>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="97%" id="AutoNumber1">
    <tr>
      <td width="100%" bgcolor="#F1F1F1">&nbsp;-<font face="Tahoma">› Recent Uploads</font></td>
    </tr>
    <tr>
      <td width="100%">
                      <table border="0" cellpadding="0" valign="top" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#111111" width="100%" id="AutoNumber17" height="131">
              <tr>
                <td width="77%" height="13">&nbsp;1. <a href="index.php?module=addon_comments&amp;id=1064280164">Mode Dialog V.1</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;2. <a href="index.php?module=addon_comments&amp;id=1064188820">Away System V.2</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;3. <a href="index.php?module=snippet_comments&amp;id=1063673942">$bdtok</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=snippets">Snippets</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;4. <a href="index.php?module=snippet_comments&amp;id=1063627483">$altok</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=snippets">Snippets</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;5. <a href="index.php?module=addon_comments&amp;id=1063357123">System info</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;6. <a href="index.php?module=addon_comments&amp;id=1063309704">Alignd theme helper</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;7. <a href="index.php?module=addon_comments&amp;id=1063239036">Master Dialog V.1</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;8. <a href="index.php?module=addon_comments&amp;id=1063235005">Vincula Sidebar</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;9. <a href="index.php?module=script_comments&amp;id=1063228970">Vincula Sidebar</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=scripts">Scripts</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;10. <a href="index.php?module=addon_comments&amp;id=1063225186">prop dialog</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;11. <a href="index.php?module=addon_comments&amp;id=1063163476">Kick/ban Dialog</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=addons">Addons</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;12. <a href="index.php?module=script_comments&amp;id=1063061424">ExcurZ|on v1.0</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=scripts">Scripts</a></td>
              </tr>
              <tr>
                <td width="77%" height="13">&nbsp;13. <a href="index.php?module=script_comments&amp;id=1063057932">QuickChat v2.0 fo..</a></td>
                <td width="28%" height="13" align="right"><a href="index.php?module=scripts">Scripts</a></td>
              </tr>
            </table>
            </td>
    </tr>
  </table>
  </center>
</div>
</td>
        </tr>
      </table>
      </center>
    </div>  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family:tahoma; font-size:8pt; color:#000000" bordercolor="#111111" width="95%" id="AutoNumber3">
    <tr>
      <td width="42%"><font face="Tahoma" style="font-size=8pt"><br></font></td>
    </tr>
  </table>
  </center>
    
    </td>
  </tr>
  <tr>
    <td width="88%" height="18" valign="top">
    <div align="center">
      <center>
      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#DDDDDD" width="100%" id="AutoNumber4" height="100%">
        <tr>
          <td width="100%" bgcolor="#F2F2F2">&nbsp; -› This page was compiled in 0.47308 seconds.</td>
        </tr>
      </table>
      </center>
    </div>
    </td>
  </tr>
  <tr>
    <td width="190" height="8" valign="top" nowrap colspan="2">
    </td>
    </tr>
</table>

<p align="center"><br>
&nbsp;

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1">
    <tr>
      <td width="100%">
      <p align="center">You are connecting from 209.237.238.158, and hostname crawl8-public<font color="\&quot;#073C78\&quot;">.<font color="\&quot;#000000\&quot;">alexa<font color="\&quot;#073C78\&quot;">.<font color="\&quot;#000000\&quot;">com.<br>Website best viewed with 1024x768 resolution, or higher. Bareable with lower resolution.<br>
      Website contains 610 screenshots, 12235 total comments, aswell as 4906 members<br>
      Currently 17 users browsing this website, 15004 total homepage hits.<br>
      Copyright © 2002-2003 Elite-Scriptaz. All Rights Reserved.</td>
    </tr>
  </table>
  </center>
</div>
<br>

</body>

</html>