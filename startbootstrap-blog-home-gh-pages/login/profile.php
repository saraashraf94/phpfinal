
<?php
require_once ('../active_record/config.php');
session_start();

$email=$_SESSION['email'];


$us=User::all(array('conditions'=>array("email=?",$email)));

foreach($us as $u)
{



    echo " email of user is : ". $u->id;
}
$_SESSION['id']= $u->id;
echo $_SESSION['id'];

echo "welcome to your profile page $email;";
header('Location:http://localhost/PHP_project/startbootstrap-blog-home-gh-pages/index.php');
?>