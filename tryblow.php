<?php 

extract($_POST);
if(isset($save))
{

$img=$_FILES['img'];
$categories= $_POST['categories'];

$conn=mysqli_connect("localhost","root","","ons");
$query="insert into whistles values(now(),'$categories','$des', '$img', $comment,)";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']);


$err="<font color='blue'>Registration successfull !!</font>";

}




?>
<html>
<head >
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<div id="logo">LOGO-LOGO
<p><center>TUM ONLINE WHISTLEBLOWING SYTEM</center></p></div>
</head>

<body>
<p>make sure the information you are providing is accurate , complete and helpful as possible</p>
<p>input all the necessary details to assist us in sorting</p>
<form method="post" enctype="multipart/form-data">
<select name="catogories"><option>categories</option><option>corruption</option> <option>harrasment</option><option>office misuse</option><option>drug abuse</option></select>  <br>

<input type="text" value="description"  name="des" style="margin-top:10px;" style="font-size:18pt;height:200px;width:300px;" required/><br>
<input type="file" value="help value" name="img" >

<textarea name="comment" rows="5" cols="40" required/></textarea>
<input type="submit" value="send" name="post" >
</form>
</body>
</html>