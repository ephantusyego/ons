<?php
include ('connector.php');
session_start();
$_SESSION['name']=$e;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ethicsoffice</title>
<link href="styles.css" rel="stylesheet" type="text/css"> 
<div id="logo">LOGO-LOGO</div>
<p><center>TUM ONLINE WHISTLEBLOWING SYTEM</center></p>
</head>

<body bgcolor="#38D910">
<p align="center">welcome home, <span style="color: red;"><b><?php echo $_SESSION['name']; ?>  </p> 
<p>you are reaciving new messages from students </p>
<p>for you to submit a complain and report a particular issue, you only to have the evidence file and upload for the office of ethics to check scrutinize and do the necessary.to do so,  or the button below named blow it.</p>
<p> to check the current database load, click below</p>
<a href="adminview.php"> <input type="button" value="click to view"> </a>
<p>to the notice board channel,click the button below</p>
<a href="addnotice.php"> <input type="button" value="click to view"> </a>
</body>
</body>
</html>

  