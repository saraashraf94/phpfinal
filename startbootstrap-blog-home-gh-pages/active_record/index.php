<?php
require_once ('config.php');
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

        if(isset($_POST['fname'])){
            $fname=$_POST['fname'];        
        }else{
            $fname='';
        }
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
  <title>Responsive Login/Signup Modal Window</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <body>
	<header role="banner">
		<div id="cd-logo"><a href="#0"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-logo_1.svg" alt="Logo"></a></div>

		<nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a class="cd-signin" href="#0">Sign in</a></li>
				<li><a class="cd-signup" href="#0">Sign up</a></li>
			</ul>
		</nav>
	</header>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login" name="submit">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form" method"post" action="home.php">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">First Name</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="First Name"name="fname" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
							<label class="image-replace cd-username" for="signup-username">Last Name</label>
							<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Last Name" name="lname"required>
							<span class="cd-error-message">Error message here!</span>
						</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email"required>
						 <span class="cd-error-message">Error message here!</span>
					</p>


					<p class="fieldset">
							<label class="image-replace cd-password" for="signup-password">Password</label>
							<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="password"required>
							<a href="#0" class="hide-password">Hide</a>
							<span class="cd-error-message">Error message here!</span>
						</p>


					<p class="fieldset">
							 <label class="image-replace cd-username" for="signup-email">Phone Number</label> 
							<input class="full-width has-padding has-border" id="signup-email" type="text" placeholder="Phone Number" name="phone"required>
							<span class="cd-error-message">Error message here!</span>
						</p>
						
					

					<p class="fieldset">
							<label class="image-replace cd-username" for="signup-password">Birth Date:</label>
							<input class="full-width has-padding has-border" id="signup-password" type="date" naem="date"required>
					</p>

					<p class="fieldset">
							
							<input class="full-width has-padding has-border" id="signup-password" type="file"  placeholder="image" name="image"required>
							
							<span class="cd-error-message">Error message here!</span>
						</p>


					<p class="fieldset">
							<label  for="signup-email">Gender:</label> 
						<input type="radio" name="gender" value="male"required> Male
				
						<input type="radio" name="gender" value="female" required> Female						
						</p>
					


					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

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
        $image=$_POST['image'];
        $date=$_POST['date'];

        
        $user=new User();
        $user->lname=($lname);
        $user->save();
    
    }
?>