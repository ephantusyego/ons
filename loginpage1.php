<html>
<head>
	
    <title>My student Login</title>
   <div id="logo">LOGO-LOGO</div>
<h1><center>TUM ONLINE WHISTLEBLOWING SYTEM</center></h1>
     <link href="styles.css" rel="stylesheet" type="text/css">   
   

</head>
<body>
	<div style="text-align: center;">
   
                    <h2 id="myAccountTitle">STAFF  LOGIN</h2>
              
	<form name="getLogin" class="pure-form pure-form-stacked" method="post">
		
	
				<label>PSEUDONYM</label> <input id="txtLogin"
					class="disableAutocomplete" name="userIdentifier" runat="server"
					type="text" size="45"
					value="" /><br><br>
			
				<label>PASS_CHECK </label> <input id="txtPassword"
					class="disableAutocomplete" type="password" name="password"
					runat="server" size="45" /><br><br>

	          <input type="button" value="Log in" size="30" style="width: 100px;" onclick="blowit.php" /> <br><br>
	
		<span><a
			href="/mwebcore/myaccount/login/passwordreminder/passwordReminder.jsp">Forgotten
			Password?</a></span>
	</form>
       </div>
</body>
</body> <!-- body -->
</html>
