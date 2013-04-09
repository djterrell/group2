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
<table align = "center">
<tr>
<td>Username: </td><td><input type="text" name = "loginUsername" ></td>
</tr>
<tr>
<td>Password: </td><td><input type="password" name = "loginPassword" ></td>
</tr>
<tr>
<td>Confirm Password: </td><td><input type="password" name="loginConfirmPassword"></td>
</tr>
<tr>
<td>First Name: </td><td><input type = "text" name = "loginFirstName"></td>
</tr>
<tr>
<td>Last Name: </td><td><input type = "text" name = "loginLastName"></td>
</tr>
<tr>
<td>Email: </td><td><input type="text" name = "loginEmail" ></td>
</tr>
<tr>
<td>Street address: </td><td><input type = "text" name = "loginAddress"></td>
</tr>
<tr>
<td>City: </td><td><input type = "text" name = "loginCity"></td>
</tr>
<tr>
<td>State: </td><td><input type = "text" name = "loginState"></td>
</tr>
<tr>
<td>Zip Code: </td><td><input type = "text" name = "loginZip"></td>
</tr>
<tr>
<td><input type="submit" value="Register"></td>
</tr>
</table>
</form>
</div>

</body>
</html>
