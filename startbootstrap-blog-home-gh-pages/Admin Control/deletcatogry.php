<?php
require_once"config.php";
if($_GET["idCat"]){

$cat=Category::find_by_id($_GET["idCat"]);

  $cat->status=1;
 $cat->save();
  header("Location:catogry.php");


}

?>