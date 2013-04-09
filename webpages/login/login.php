<?php
session_start();

if ($_SESSION['user_logged'] == "" || $_SESSION['user_password'] == "")
{
include "orderonlinelogin.php";
}
else
{
include "orderonlineselect.html";
}
?>
