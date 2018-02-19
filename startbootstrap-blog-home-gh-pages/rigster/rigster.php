<?php
session_start();
require_once ('config.php');
// ob_get_contents();

// ob_end_clean();
	
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
<html>
    <head>

    </head>
    <body>
    
            <div id="signup"> <!-- sign up form -->

				<form  method="post" action="home.php">
				
				<p class="fieldset">
							<label>First Name</label>
							<input id="signup-username" type="text" placeholder="First Name" name="fname"required>
						
						</p> 




					<p class="fieldset">
							<label>Last Name</label>
							<input id="signup-username" type="text" placeholder="Last Name"  name="lname"required>
							
						</p> 

					<p class="fieldset">
						<label >E-mail</label>
						<input id="signup-email" type="email" placeholder="E-mail"  name="email"required>
						
					</p>


					<p class="fieldset">
							<label>Password</label>
							<input  type="password"  placeholder="Password"  name="password" required>
							
						</p>


					<p class="fieldset">
							 <label>Phone Number</label> 
							<input type="text" placeholder="Phone Number" name="phone"required>
						
						</p>
						
					

					<p class="fieldset">
							<label >Birth Date:</label>
							<input  type="date" naem="date"required>
					</p>

					<p class="fieldset">
							
							<input  type="file"  placeholder="image"  name="image">
							
						
						</p>


					<p class="fieldset">
							<label  for="signup-email">Gender:</label> 
						<input type="radio" name="gender" value="male"required> Male
				
						<input type="radio" name="gender" value="female" required> Female						
						</p>
					


					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account" name="submit">
					</p>
				</form>

			
			</div> <!-- cd-signup -->




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


$hashed_password = password_hash($password, PASSWORD_DEFAULT);



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