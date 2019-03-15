<!doctype html>
<html>
<header>
<meta charset="utf-8">
<title>online whisteblowing system</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<img src="logo2.png" height="99px" width="129px" />
<center>TUM ONLINE WHISTLEBLOWING SYTEM</center>
</header>
<center><img src="sece.png" width="80%" height="220px" ></center>
<?php 
include ('connector.php');
extract($_POST);
if(isset($saveme))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fields first</font>";	
	}
	else
	{
$pass=($p);	
$sql=mysqli_query($conn,"select * from student_login where pseudonym='$e' and passcheck='$p'");
$r=mysqli_num_rows($sql);

if($r==true)
{
session_start();	
$_SESSION['pseudonym']=$e;	
header('Location: securityhome.php');


}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">

</head>

<div id='logbody'> <body>
<h1 style="text-align: center;">Login Form</h1>
<form method="post">

			
	
	
	<div style="text-align: center;"> <?php echo @$err;?> 
		<div class="">Enter your pseudonym :</div><br>
		<input type="text" name="e" class="uname"  style="width: 250px; border-radius: 10px; height: 30px;" /><br>
	
	

		<div class="">Enter Your Password :</div><br>
		<input type="password" name="p" class="pass" style="width: 250px; border-radius: 10px; height: 30px;"/><br><br>
	
	
		<input type="submit" value="Login" name="saveme" class="btn btn-success" style="background-color: green;border-radius: 30px; width: 250px; height: 30px; "  />
		
		

		<p>Not registered? try this =>>
		<a href="yegoreg.php"> <label>Register me</label></a></p>
	</div>

</form>	
</body>
</div>
<footer><center>copyright 2019 designed by me</center> </footer>