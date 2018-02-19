<?php
require_once ('../active_record/config.php');

session_start();
echo"welcome";



$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST['password'];
//$gender=$_POST['gender'];
$phone=$_POST['phone'];
//$date=$_POST['date'];
//$image=$_POST['image'];
print_r($_POST);
$user=User::find_by_email($email);


//$us=User::all(array('conditions'=>array("email=?",$email)))

//foreach()
print_r($user);
echo $email;

//$hashed_password = password_hash($password, PASSWORD_DEFAULT);




$user=new User();	
$user->fname=($fname);	
$user->lname=($lname);
$user->email=($email);
$user->password=($password);
//$user->gender=($gender);
$user->phone=($phone);
//$user->birthdate=($date);

$user->save();

$us=User::all(array('conditions'=>array("email=?",$email)));

foreach($us as $u)
{



    echo " email of user is : ". $u->id;
}
$_SESSION['id']= $u->id;
header('Location:index.php');
?>

