<?php

require_once"config.php";
if(isset($_GET["userid"])){

$user=User::find_by_id($_GET["userid"]);
$user->status="active";
$user->save();

 header("Location:usersContol.php");

}


?>


