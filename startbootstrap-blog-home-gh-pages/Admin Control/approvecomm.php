<?php

require_once"config.php";
if(isset($_GET["commid"])){

$coms=Comment::find_by_id($_GET["commid"]);
$coms->status="active";
$coms->reason="";
$coms->save();

 header("Location:comments.php");

}


?>