<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	
$conn=mysqli_connect("localhost","root","","ons");
$sql=mysqli_query($conn,"select * from student_login where pseudonym='$e' and passcheck='$p'");
$r=mysqli_num_rows($sql);

if($r==true)
{
header('Location: studenthome.php');


}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<html>
<head>
	
    <title>My student Login</title>
   <div id="logo">LOGO-LOGO</div>
<p><center>TUM ONLINE WHISTLEBLOWING SYTEM</center></p>
     <link href="styles.css" rel="stylesheet" type="text/css">   
   
    <!-- Get Date -->
    <script type="text/javascript">
        //<!--
                function CurrentYear()
                {
                    var date = new Date();
                    var year = date.getFullYear();
                    document.write(year);
                }

    //-->
    </script>

</head>
<body>
    
        <div id="container">
            <div id="content" class="pure-g" style="margin: 0 auto; width: 800px;">
                <div id="headerPanel" class="pure-u-1">
                    <p id="myAccountTitle">STUDENT  LOGIN</p>
                </div>

<!-- MWEB/SMI Background -->
<div id='div-gpt-ad-1373625495868-0'>

</div>
<div class="pure-u-1">
	
	<div id="errorOutputContainer">
		
	</div>
</div>
<div id="loginPanel" class="pure-u-1-2">


	<form method="post">
		<fieldset>
			<div class="pure-control-group">
				<label>PSEUDONYM</label> <input id="txtLogin"
					class="disableAutocomplete" name="userIdentifier" runat="server"
					type="text" size="45"
					value="" />
			</div>
			<div class="pure-control-group">
				<label>PASS_CHECK </label> <input id="txtPassword"
					class="disableAutocomplete" type="password" name="password"
					runat="server" size="45" />
			</div>
        </fieldset>
    </form>
	 <input class="btn btn-default btn-login col-lg-6   form-control" style="background: #ed1c24; color: #ffffff" type="submit" value="Login" > 
			
		</fieldset>
		
	
		
		<br>
	
		<span><a
			href="/mwebcore/myaccount/login/passwordreminder/passwordReminder.jsp">Forgotten
			Password?</a></span>
	</form>
</div>
<div id="adPanel" class="pure-u-1-2">
	<div class="adcode">
	</div>
</div>







          </div> <!-- content -->
      </div> <!-- container -->
<div class="clearfooter"></div>
   </div> <!-- wrapper -->
       

</body> <!-- body -->
</html>
