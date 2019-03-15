<?php 
session_start();
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$conn=mysqli_connect("localhost","root","","ons");
$sender=$_SESSION['pseudonym'];
$category=$_POST['category'];
$e=addslashes(file_get_contents($e["image"]["tmp_name"]));
$query="INSERT INTO `whistles`(`sender`,`time`,`category`,`header`,`detail`,`evidence`,`status`) VALUES ('$sender',now(),'$category', '$h', '$d', '$e','pending')";
mysqli_query($conn,$query);

header('Location: myposts.php');
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
<p><b>*Accuracy<b></p>
	<p><b>*Credibility<b></p>
		<p><b>*Completeness<b></p><br>
<h2><i>Fill details below to whistleblow</i></h2>
<form method="POST" enctype="multipart/form-data" >
<select name="category" style="border-radius: 5px; width: 250px; height: 20px; "><option>categorize your whistle</option><option>corruption</option> <option>harrasment</option><option>office misuse</option><option>drug abuse</option></select>  <br><br>


<input type="text" name="h" placeholder="Whistle header" style="border-radius: 5px; width: 250px; height: 20px; "><br><br>


<textarea name="d" rows="10" cols="50"style="border-radius: 5px;" placeholder="enter the details of the whistle.click the button below to upload evidence" required=""></textarea><br><br>
 <input type="button" name="e" id="uploadevidence" value="Upload Evidence" onclick="document.getElementById('file').click();" />
 <input type="file" style="display:none;" id="file" name="evidence"/><br><br>


<input type="submit" name="save" value="Blow whistle" style="background-color: green;border-radius: 10px; width: 100px; height: 30px; ">
</form>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name=$('#image').val();
			if( image_name=='')
			{
				alert("please select an image")
				return false
			}
			else
			{
				var extension=$('#image').val().split('.').pop().tolowercase();
				if(jquery.inarray(extension,['gif','png','jpg','jpeg'])==-1)
				{
					alert('invalid image file');
					$('#image').val('');
					return false;
				}
			}
		});
	});
</script>