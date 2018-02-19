<?php 
require_once ('config.php');

session_start();
print_r($_GET);
print_r( $_POST);

echo $_POST["title"];
echo $_POST["comment"];



//echo date("y-m-d");
//echo date("h:i:sa");
date_default_timezone_set("Egypt");

$comment=new Comment();
    $comment->title=($_POST["title"]);
    $comment->content=( $_POST["comment"]);
    $comment->status="active";
    $comment->user_id=($_SESSION['id']);
    $comment->post_id=($_GET["id"]);
    $comment->comment_date=date("h:i:sa");
    $comment->save();

echo $_GET["id"];
header('Location: indexP.php?id='.$_GET["id"]);
?>