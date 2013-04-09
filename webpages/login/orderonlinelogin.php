<?php
session_start();
include ("conn.inc.php");
if (isset($_POST['submit']))
{
     $query = "SELECT username, password FROM user_info WHERE username = '" . $_POST['username'] . "' AND password = (password('" . $_POST['password']. "'));";
     $result = mysql_query($query) or die(mysql_error());

     if (mysql_num_rows($result) == 1)
     {
          $_SESSION['user_logged'] = $_POST['username'];
          $_SESSION['user_password'] = $_POST['password'];
          header ("Refresh: 0; URL=/webpages/login/loginsuccess.php");
           }
     else
     {
?>
        <html>
		<head>
		<title>Order Online</title>
		<link rel="stylesheet" href="/stylesheet/style.css" type="text/css" />
		</head>

		<body>
		<div id = masthead>
			<div id = siteName><h2>Italian Restaurant</h2></div>
			<div id = globalNav>
				<a href = /index.html>Home</a>
				<a href= /webpages/about/about.html>About Us</a> 
				<a href = /webpages/menu/menu.html>Our Menu</a>
				<a href = /webpages/login/orderonlinelogin.php>Order Online</a> 
				<a href = /webpages/contact/contact.html>Contact Information</a>
				<a href = /webpages/register/register.php>Register</a>
			</div>
		</div>		
		<h3>Order Online</h3>
		<div id = mainText>
		<p>Invalid Username and/or Password<br>
          Not registered? <a href="/webpages/register/register.php>Register">Click here</a> to register.</p><br>
		<form name = "frmLogin" onSubmit="orderonlinelogin.php" method ="post">
			 <input type="hidden" name="redirect" value="<?php echo $_POST['redirect'];?>">
			 Username: <input type="text" name="username"><br>
			 Password: <input type="password" name="password"><br><br>
			 <input type="submit" name="submit" value="Login">
			</form>
		<input type = "Submit" value = "Complete My Order">
		</div>
		</body>
		</html>
<?
     }
}
else
{
if ($_SERVER['HTTP_REFERER'] == "" || $_SERVER['HTTP_REFERER'] == "http://141.210.25.90/webpages/login/orderonlinelogin.php")
{
$redirect = "http://141.210.25.90/webpages/order%20online/orderonlineselect.html";
}
else
{
$redirect = "http://141.210.25.90/webpages/order%20online/orderonlineselect.html";
}
?>
    <html>
	<head>
	<title>Order Online</title>
	<link rel="stylesheet" href="/stylesheet/style.css" type="text/css" />
		</head>

		<body>
		<div id = masthead>
			<div id = siteName><h2>Italian Restaurant</h2></div>
			<div id = globalNav>
				<a href = /index.html>Home</a>
				<a href= /webpages/about/about.html>About Us</a> 
				<a href = /webpages/menu/menu.html>Our Menu</a>
				<a href = /webpages/login/orderonlinelogin.php>Order Online</a> 
				<a href = /webpages/contact/contact.html>Contact Information</a>
				<a href = /webpages/register/register.php>Register</a>
			</div>
		</div>		
	<h3>Order Online</h3>
	<div id = mainText>
	<form name = "frmLogin" onSubmit="orderonlinelogin.php" method ="post">
		 <input type="hidden" name="redirect" value="<? echo $redirect; ?>">
		 Username: <input type="text" name="username"><br>
		 Password: <input type="password" name="password"><br><br>
		 <input type="submit" name="submit" value="Login">
		</form>
	</div>
	</body>
	</html>
<?php
}
?>
