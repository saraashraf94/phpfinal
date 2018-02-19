<?php

require_once ('../active_record/config.php');

session_start();


if(
	!isset($_POST['submit'])
	||!isset($_POST['email'])   
){
    $email=isset($_POST['email'])?$_POST['email']:'';
}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<style>
a{

    color:rgb(255, 246, 246);
    text-decoration: none;

}

</style>
<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		

<?php




if(isset($_POST['email']) && isset($_POST['password']))
{
	$status_users=User::find_by_email($_POST["email"]);
	$s=$status_users->status;

	if($s=="draft")
	{
		$message="Wait a permission from Admin";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

	else if($s=="deleted")
	{
		$message="This is user is deleted";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else if($s=="active"){
	$email=$_POST['email'];
    $password=$_POST["password"];

    $password_users=User::find_by_password($_POST["password"]);
    
	$email_users=User::find_by_email($email);


	if($email_users && $password_users){
		

		$_SESSION['email']=$email;

		if($email=="admin1@yahoo.com"&&$password=="admin"){


			header("Location:http://localhost/example/Project/Admin%20Control/posts.php");
        
		}

		else{



        echo "<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";


        
        header("Location:profile.php");
        
		}
            }
            

		
        }
	}
        
      ?>
                        

		<form class="form"  method="post" action="">
			<input type="email" placeholder="User Email" name="email" required>
			<input type="password" placeholder="Password" name="password" required>
            <input type="submit" id="login-button" name="submit" value="Login">
            <br><br>
            <a  href="http://localhost/example/Project/rigster/index.php">
							Create your Account 
							
						</a>
		</form>


    </div>
  
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
        <li></li>
        <li></li>
        <li></li>
	</ul>
</div>



  

    <script  src="js/index.js"></script> 




</body>

</html>
