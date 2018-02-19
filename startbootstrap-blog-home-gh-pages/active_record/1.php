<?php
require_once"config.php";
$cat=Comment::find_by_id(1);
echo $cat->content;

?>
