<?php

require_once"config.php";
if(isset($_GET["postid"])){

$post=Post::find_by_id($_GET["postid"]);
$post->status="active";
$posts->reason="";
$post->save();

 header("Location:posts.php");

}


?>