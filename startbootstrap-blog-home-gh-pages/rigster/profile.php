
<?php
session_start();

$email=$_SESSION['email'];
$password=$_SESSION['password'];
echo "welcome to your profile page $email and password is $password;";

?>