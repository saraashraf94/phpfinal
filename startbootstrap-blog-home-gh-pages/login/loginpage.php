<!-- //?php
require_once"config.php";

//  cmd.Parameters.AddWithValue("@RegisteredDate", DateTime.Now.ToString());
//
//
//
//$cat=Comment::find_by_id(1);
////
////$cat=User::find_by(.Comment_user_id => [1])
////$cat=Comment :: array('title' -> 'My first blog post!!', 'use_id' -> (1));
//echo $cat->content;

//$cat=strftime("%Y-%m-%d ...... %H:%M:%S:%p");

//echo "The time is " . date("h:i:sa");

//echo date("m/d/Y h:i:s a", time());


//
//    $user=new User();
//
//$ln="sososl";
//    $user->lname=($ln);
//	$user->Fname="koko";
//    $user->email="wwooowwsd323sdddd@hotmail.com";
//    $user->password=1234;
//    $user->gender="fmale";
//	$user->birthdate="1994-7-7";
//	$user->phone=123123;
// 

//
//	$first="soka";
//	$lname="hamed";
//	$email="sa11raahssmrd@yahoo.com";
//	$password="ddffs3";
//	$gender="fmale";
//	$phone="2342432";
//	
//	$date="1992-1-23";
//
//
//
//	$user=new User();
//	$user->first=($first);
//	$user->lname=($lname);
//	$user->email=($email);
//	$user->password=($password);
//	$user->gender=($gender);
//	$user->phone=($phone);
//	$user->birthdate=($date);
//
//	$user->save();
//
//echo "done"; -->



<?php

require_once"config.php";

    if(isset($_POST['email'])){

	$email=($_POST['email']);

	$email_users=User::find_by_email($email);

	    if($email_users){
            session_start();
            $_SESSION['email']=$email;
            
            header("Location:profile.php");
                 }else{

            header('Location:index.php');
                }
            }else{

                        
        
        

?>

<form  method="post" action="">
<label  for="signin-email">E-mail</label>
<input  id="signin-email" type="email" placeholder="E-mail" name="email" required>
<input  type="submit" value="Login" name="submit">
</form>

<?php
                  
}

?>
<!-- 



 //echo $data =  $browser['browser'];

//
// date_default_timezone_set("Egypt");
//
//echo   date("h:i:sa");

//echo date("m/d/Y h:i:s a", time());

//echo $date = date('m/d/Y h:i:s a', time());

//echo Time.now.strftime("%I:%M");
//
//$t= Time.now ;
//$t.strftime("Printed on %m/%d/%Y");
//$t.strftime("at %I:%M%p");
//	


// echo Article.created_before(Time.zone.now)

?> -->
