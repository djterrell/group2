
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

$select = "SELECT * FROM user_info WHERE username = '".$username."'";
$result = mysql_query($select) or
	die(mysql_error());

if(mysql_num_rows($result) > 0)
	$message = "Username already in use";
	

else
{	

	$select = "SELECT * FROM user_info WHERE email = '".$email."'";
	$result = mysql_query($select) or
		die(mysql_error());

	if(mysql_num_rows($result) > 0)
		$message = "Email already in use";

	else
	{

		$insert = "INSERT INTO user_info(email, username, password, first_name, last_name, city, state, zip, address) 
			VALUES ('$email', '$username', Password('$password'), '$firstname', '$lastname', '$city', '$state', '$zip', '$address')";

		$results = mysql_query($insert)
			or die(mysql_error());


		$message = "Registration successful!";
	}
}

?>

	<html>
	<head>
	<title>Registration Status</title>
	<link rel="stylesheet" href="/stylesheet/style.css" type="text/css" />
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
	<div id = mainText>
	<?php echo $message; ?>
	</div>
	</body>
	</html>

	<?php 

	if($message == "Registration successful!")
		header( "refresh:3;url=/webpages/login/orderonlinelogin.php" ) ;
	else
		header( "refresh:3; url = /webpages/register/register.php" );
	?>