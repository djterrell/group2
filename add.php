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

echo "You made it, ";
echo $_POST["loginUsername"];

?>