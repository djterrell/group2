<?php

$connect = mysql_connect("localhost", "djterrel", "bajacob1") or
	die("CHECK CONNECTION");

mysql_select_db("users");

$email =  $_POST["loginEmail"];
$username = $_POST["loginUsername"];
$password = $_POST["loginPassword"];
$firstname = $_POST["loginFirstName"];
$lastname = $_POST["loginLastName"];
$city = $_POST["loginCity"];
$state = $_POST["loginState"];
$zip = $_POST["loginZip"];
$address = $_POST["loginAddress"];

$insert = "INSERT INTO user_info(email, username, password, first_name, last_name, city, state, zip, address) 
	VALUES ('$email', '$username', Password('$password'), '$firstname', '$lastname', '$city', '$state', '$zip', '$address')";

$results = mysql_query($insert)
	or die(mysql_error());
?>

<html>
<head>
<title>Registration Successful</title>
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
<div id = mainText>
Registration successful, <?php echo $username; ?>
</div>
</body>
</html>

<?php 
header( "refresh:3;url=orderonlinelogin.php" ) ;
?>