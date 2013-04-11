
<?php
session_start();

?>

<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="/stylesheet/style.css" type="text/css" />
<script>
function validate(form)
{
	var Username = frmRegister.loginUsername.value;
	var Password = frmRegister.loginPassword.value;
	var ConfirmPassword = frmRegister.loginConfirmPassword.value;
	var Email = frmRegister.loginEmail.value;
	var FirstName = frmRegister.loginFirstName.value;
	var LastName = frmRegister.loginLastName.value;
	var Address = frmRegister.loginAddress.value;
	var City = frmRegister.loginCity.value;
	var State = frmRegister.loginState.value;
	var Zip = frmRegister.loginZip.value;


	if(Username.length < 6)
	{
		alert("Your username must be at least 6 characters.");
		document.frmRegister.loginUsername.focus();
		return false;
	}

	if(Password.length < 6)
	{
		alert("Your password must be at least 6 characters.");
		document.frmRegister.loginPassword.focus();
		return false;
	}

	if(Password != ConfirmPassword)
	{
		alert("Your password and confirmation password did not match.");
		document.frmRegister.loginPassword.value="";
		document.frmRegister.loginConfirmPassword.value="";
		document.frmRegister.loginPassword.focus();
		return false;
	}

	if(FirstName.length < 1)
	{
		alert("You must enter a first name");
		document.frmRegister.loginFirstName.focus();
		return false;
	}
	
	if(LastName.length < 1)
	{
		alert("You must enter a last name");
		document.frmRegister.loginLastName.focus();
		return false;
	}

	if(Email.length < 7)
	{
		alert("You must enter a valid email address");
		document.frmRegister.loginEmail.focus();
		return false;
	}
	
	if(Address.length < 1)
	{
		alert("You must enter a valid address");
		document.frmRegister.loginAddress.focus();
		return false;
	}

	if(City.length < 1)
	{
		alert("You must enter a valid city");
		document.frmRegister.loginCity.focus();
		return false;
	}
	
	if(State.length < 4 && State.length != 2)
	{
		alert("You must enter a valid state or state abbreviation");
		document.frmRegister.loginState.focus();	
		return false;
	}
	
	if(Zip.length != 5 && Zip.length != 10)
	{
		alert("You must enter a valid zip code");
		document.frmRegister.loginZip.focus();
		return false;
	}

	return true;
}
</script>
</head>

<body>
<div id = masthead>
	<div id = siteName><h2>Authentic Italian Dining</h2></div>
	<div id = globalNav>
		<a href = /index.html>Home</a>
		<a href= /webpages/about/about.html>About Us</a> 
		<a href = /webpages/menu/menu.html>Our Menu</a>
		<a href = /webpages/login/orderonlinelogin.php>Order Online</a> 
		<a href = /webpages/contact/contact.html>Contact Information</a>
		<a href = /webpages/register/register.php>Register</a>
	</div>
</div>

<h3>Register New Account</h3>
<div id = mainText>
<form name = frmRegister action = "add.php" method = "post" onSubmit = "return validate();">
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
