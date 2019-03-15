<header>
<meta charset="utf-8">
<title>online whisteblowing system</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<img src="logo2.png" height="85px" width="100px" />
<center>TUM ONLINE WHISTLEBLOWING SYTEM</center>
</header>
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
$sql=mysqli_query($conn,"select * from office where name='$e' and password='$p'");
$r=mysqli_num_rows($sql);

if($r==true)
{
session_start();	
$_SESSION['name']=$e;	
header('Location: officehome.php');


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
<div id="logbody">  
<center> <img src="tum.jpeg" width="70%" height="270px" ></center>
<h1 style="text-align: center;">Login Form</h1>
<form method="post">

	
	
	
	<div style="text-align: center;"> <?php echo @$err;?> 
		<div class="">Enter your name :</div><br>
		<input type="text" name="e" class="uname"  style="width: 250px; border-radius: 10px; height: 30px;" /><br>
	
	

		<div class="">Enter Your Password :</div><br>
		<input type="password" name="p" class="pass" style="width: 250px; border-radius: 10px; height: 30px;"/><br><br>
	
	
		<input type="submit" value="Login" name="saveme" class="btn btn-success" style="background-color: green;border-radius: 30px; width: 250px; height: 30px; "  />
		
		

		
	</div>

</form>	

</body>
</div>

<footer><center>copyright 2019 designed by me</center> </footer>