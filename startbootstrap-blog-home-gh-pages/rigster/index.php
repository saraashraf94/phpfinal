<?php
session_start();
require_once ('../active_record/config.php');
	
if(
	!isset($_POST['submit'])
	||!isset($_POST['fname'])
	||!isset($_POST['lname'])
	||!isset($_POST['email'])        
	||!isset($_POST['password'])
	||!isset($_POST['gender']) 
	||!isset($_POST['phone'])
	||!isset($_POST['image'])               
	||!isset($_POST['date'])
	        
	||empty($_POST['fname'])
	||empty($_POST['lname'])
	||empty($_POST['email'])        
	||empty($_POST['password'])
	||empty($_POST['gender']) 
	||empty($_POST['phone'])
	||empty($_POST['image'])               
	||empty($_POST['date'])
	  
	){

        $fname=isset($_POST['fname'])?$_POST['fname']:'';
        $lname=isset($_POST['lname'])?$_POST['lname']:'';
        $email=isset($_POST['email'])?$_POST['email']:'';
        $password=isset($_POST['password'])?$_POST['password']:'';
        $gender=isset($_POST['gender'])?$_POST['gender']:"";
        $phone=isset($_POST['phone'])?$_POST['phone']:'';
        $image=isset($_POST['image'])?$_POST['image']:'';               
        $date=isset($_POST['date'])?$_POST['date']:'';		
	
    ?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<style>



</style>
<body>

  <div class="wrapper">
	<div class="container">
		<h1>Create New Account</h1>
		
     

		<form class="form"  method="post" action="home.php">
			<input type="text" placeholder="First Name" name="fname"required>
			<input type="text" placeholder="Last Name " name="lname"required>
			
			<input type="email" placeholder="User Email" name="email"required>
			
			<input type="password" placeholder="Password" name="password"required>
			<input type="text" placeholder="Phone Number" name="phone"required>

			<input  type="date" naem="date"required placeholder="Birth Date"required>

			<input  type="file"  placeholder="Image Profile"  name="image"required>
<!-- 
			<input type="radio" name="gender" value="male"required> Male
			<input type="radio" name="gender" value="male"required> FMale -->
			
									
				
            <input type="submit" id="login-button" name="submit" value="Login" id="login">
           
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
        <li></li>
        <li></li>
	</ul>
</div>



  

    <script  src="js/index.js"></script> 




</body>

</html>
<?php
}else{

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST['password'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
//$image=$_POST['image'];
$date=$_POST['date'];


//$hashed_password = password_hash($password, PASSWORD_DEFAULT);



$user=new User();

$user->first=($fname);	
$user->lname=($lname);
$user->email=($email);
$user->password=($hashed_password);
$user->gender=($gender);
$user->phone=($phone);
$user->birthdate=($date);

$user->save();


 header("Location:home.php");
	

}


?>