<?php
require_once ('config.php');
session_start();
echo"welcome";


$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST['password'];
//$gender=$_POST['gender'];
$phone=$_POST['phone'];


print_r($_POST);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);




$user=new User();	
$user->first=($fname);	
$user->lname=($lname);
$user->email=($email);
$user->password=($hashed_password);
//$user->gender=($gender);
$user->phone=($phone);
$user->birthdate=("2-3-2039");

$user->save();



?>