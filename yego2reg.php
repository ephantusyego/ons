<?php 

extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$conn=mysqli_connect("localhost","root","","ons");
$sql=mysqli_query($conn,"select * from office where name='$n'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{

//encrypt your password
$pass=($p);


$query="INSERT INTO `office`(`name`, `password`,`initials`) VALUES ('$n', '$pass','$ini')";
mysqli_query($conn,$query);

header('Location: officehome.php');
}
}




?>
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<h1 style="text-align: center;" >Registration Form</h1>
		<form method="post" enctype="multipart/form-data">
			<div class="table table-bordered" style="text-align: center;">
	<?php echo @$err;?>
					
					<input  type="text"  class="uname" name="n" required style="width: 250px; border-radius: 10px; height: 30px;" placeholder="Enter your name" /><br><br>
					
					<input type="password"  class="pass" name="pass" required style="width: 250px; border-radius: 10px; height: 30px;" placeholder="Enter a password" /><br><br>
				
				    <input type="initials"  class="ini" name="ini" required style="width: 250px; border-radius: 10px; height: 30px;" placeholder="Enter a sign initials" /><br><br>
				
				
					

<input type="submit" class="btn btn-success" value="Save" name="save" style="background-color: green;border-radius: 10px; width: 80px; height: 30px; "/>
<input type="reset" class="btn btn-success" value="Reset" style="background-color: green;border-radius: 10px; width: 80px; height: 30px; "/><br><br>
<p>Already have an account?<a href="login.php">Login</a></p>
				
					
			
			</div>
		</form>
	</body>
</html>