<?php
session_start();

?>

<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div id = masthead>
	<div id = siteName><h2>Italian Restaurant</h2></div>
	<div id = globalNav>
		<a href = index.html>Home</a> 
		<a href= about.html>About Us</a> 
		<a href = menu.html>Our Menu</a>
		<a href = orderonlinelogin.php>Order Online</a> 
		<a href = contact.html>Contact Information</a>
		<a href = register.php>Register</a>
	</div>
</div>

<h3>Register New Account</h3>
<div id = mainText>
<form action = "add.php" method = "post">
Username: <input type="text" name = "loginUsername" ><br />
Password: <input type="password" name = "loginPassword" ><br />
Confirm Password: <input type="password" name="loginConfirmPassword"><br>
First Name: <input type = "text" name = "loginFirstName"><br>
Last Name: <input type = "text" name = "loginLastName"><br>
Email: <input type="text" name = "loginEmail" ><br />
Street address: <input type = "text" name = "loginAddress"><br>
City: <input type = "text" name = "loginCity"><br>
State: <input type = "text" name = "loginState"> <br>
Zip Code: <input type = "text" name = "loginZip"><br>
<input type="submit" value="Register">
</form>
</div>

</body>
</html>
