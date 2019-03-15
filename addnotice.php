<?php 
session_start();
extract($_POST);
if(isset($save))
{
$conn=mysqli_connect("localhost","root","","ons");
$target=$_POST['target'];
$notice=$_POST['notice'];
$query="INSERT INTO `notice`(`time`,`type`,`notice`,`target`) VALUES (now(),'$type','$notice','$target')";
mysqli_query($conn,$query);

header('Location: noticeboard.php');
}
?>
<!doctype html>
<html>
<head >
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<div id="logo">LOGO-LOGO
<h1><center>TUM ONLINE WHISTLEBLOWING SYTEM</center></h1></div>
</head>

<body>
	<p><b>Please uphold:<b></p>
<p><b>*Accuracy<b><b>*Credibility<b><b>*Completeness<b></p><br>
	<p>now that the institution looks upon you to ensure that you collect maximuminformation to help us eradicate unethical practices in the school, we giving another plartform where you can -
	*ask any question.<br>
     *give more directives about a certain case.<br>
     *stop any romouirs <br>
 do so by anouncing everything here, it reaches all parties.</p>
<h2><i>Fill details below to add to Notice board</i></h2>
<form method="POST" enctype="multipart/form-data" >

<input type="text" name="type" placeholder="State the type" style="border-radius: 5px; width: 250px; height: 20px; "><br><br>
<textarea name="notice" rows="10" cols="50"style="border-radius: 5px;" placeholder="enter the details of the notice."></textarea><br><br>
<select name="target" style="border-radius: 5px; width: 250px; height: 20px; "><option>Target</option><option>students</option> <option>staff</option><option>security</option><option>ALL</option></select>  <br><br>

<input type="submit" name="save" value="addNOTICE" style="background-color: green;border-radius: 10px; width: 100px; height: 30px; ">
</form>
</body>
</html>