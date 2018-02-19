<?php

ob_start();
require_once"config.php";
 //$catogryarr=Category::find("all", array('order' =>'title asc'));
 //echo "<pre>";
 //print_r($catogryarr);
 //echo"</pre>";

 $newcat=new Category();
 if($_GET["namecatogry"]){
 $newcat->title=$_GET["namecatogry"];
 $newcat->status=0;
 $newcat->save();
header("Location:catogry.php");

}
// echo $newcat->title;
 //$student = mysqli_fetch_assoc($catogryarr);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form  method="post">
              <div >
                <label >Add Catogery </label>

                <div>
                  <input type="text" name="catogryname">
                </div>

              </div>
              <input type="submit" value="Create New Catogry">
               </form>
</body>
</html>

 