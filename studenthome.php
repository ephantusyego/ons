<?php
session_start();
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bloethewhistle</title>
<link href="styles.css" rel="stylesheet" type="text/css"> 
<div id="logo">LOGO-LOGO</div>
<p><center>TUM ONLINE WHISTLEBLOWING SYTEM</center></p>
</head>

<body bgcolor="#38D910">

  <p align="center"> welcome home  <span style="color: red;"><b><?php echo $_SESSION['pseudonym']; ?></b></span> </p>
<p>be a good well wisher for the universitoes growth and positive progress , we thank you fot the participation. </p>
<p>for you to submit a complain and report a particular issue, you only to have the evidence file and upload for the office of ethics to check scrutinize and do the necessary.to do so, <a href="blowit.php"> click here </a> or the button below named blow it.</p>
<a href="blowit.php"><input type="button" value="click to submit"> </a>
<p>To view all the posts you've sent earlier on,press the button below</p>
<a href="myposts.php"><input type="button" value="My Posts"> </a>
<p>we also have provide a platform for all the students to be able to view all the reports submitted by fellow students and the staff.check by clicking the button below</p>
<a href="evidence2.php"> <input type="button" value="view  posts" name="LoginUser"  ></a>
<p>we also have an online noticeboard for our office where you can check our updates</p>
<a href="noticeboardstudent.php"><input type="button" value="notice board" name=""><br></a>
<p>to  exit the office board room click the log out button to leave no traces</p>

<a href="logout.php"> <input type="button" value="log out" name="LoginUser" ></a>

</body>
</body>
</html>

  