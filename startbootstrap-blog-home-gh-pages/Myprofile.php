<?php 
require_once"config.php";

//session_start();
$User_id=1;

$user_id=$_GET['id'];
            
                $r=User::all(array('conditions'=>array('id=?',$_GET["id"])));
                foreach($r as $u){
                     $f=$u->fname;
                    $l=$u->lname;
}
?>



<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='style.css'>
<style>
html,body,h1,h2,h3,h4,h5 {font-family:"Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><?php echo $f." ".$l;?></a>
  <a href="index.php" class="home">Home</a>
  <div class="w3-dropdown-hover w3-hide-small">
  </div>
 </div>
</div>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="user.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
            <?php  $user_id=$_GET['id'];
            
                $r=User::all(array('conditions'=>array('id=?',$_GET["id"])));
                foreach($r as $u){
                    ?><p> Email is :<?php echo " ". $u->email;?></p>
                        <p> phone :<?php echo " ". $u->phone;?></p>
                        <p> gender is :<?php echo " ". $u->gender;?></p>
                        <p> jop is :<?php echo " ". $u->jop;?></p>
            <?php
                    
                    
                }
            
            ?>
         
        </div>
      </div>
      <br>
      
      
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
        </span>
        <p><strong>Hey!</strong></p>
        <p>I wish to be happy with us</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">


      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding" style="margin-bottom: 20px">

<!-- Post Form to add post -->
<div  class="card my-4"style="margin: 10px auto; position: relative; width: 100%; height: 300px; padding-top:30px" >
         <div  class="card my-4 addpost" style="width: 550px;position:absolute;left: 70px;">
            <div class="card-body">
            
              <form action="AddPost.php?id=1"  method="post"  enctype='multipart/form-data'>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                  <textarea class="form-control" rows="3" name="content" required placeholder="Add your post" ></textarea>
                  
                    <select name="category" required >
                    
                       
                        
                        <?php
                        $Cat=Category::find('all');
                        foreach( $Cat as $row){
                            
                            ?>
                            <option><?= $row->title; ?></option>
                        
                        <?php
                        }
                        
                        ?>
                       
                        
                    </select>
                    
                    
                    
                    
                    <input type='file' name='file'  required/>
                </div>
                
                  
                  
                  <input type='submit' class="btn btn-primary" value=' Save ' name='but_upload'>
              </form>
               
            </div>
          </div>
    
    <!-- end of add post -->
    
                                        
            </div>
          </div>
        </div>
      </div>

          

       <?php
    print_r($_GET);
   
    echo 'id is '. $user_id;
      ?>    
        

      
        
          
          
          <?php
            if (isset( $_GET["id"])){
            $res=Post::all(array('conditions'=>array('user_id=?',$_GET["id"])));
            #print_r($res);
            
            foreach($res as $r)#{print_r($r->to_array());}
            {
            $post_id= $r->id;
            ?>
          <!-- Blog Post -->
         <div class="card mb-4"><?php
         #echo $r->imagename;
             
             ?>
             
            <img class="card-img-top" src='<?php echo $r->image;?>' alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $r->title ; ?></h2>
              <p class="card-text"><?php
                $string= $r->content ;
                $string = strip_tags($string);
                if (strlen($string) > 140) {

                // truncate string
                $stringCut = substr($string, 0, 140);
                $endPoint = strrpos($stringCut, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                    
                $string .="a"; 
                }
                echo $post_id;
                echo $string;
                ?>
                   <br><br> <a href="indexP.php?id=<?php echo $post_id;?>"  class="btn btn-primary">Show complete post &rarr;</a>
                  <?php
                
                
                
                
                 ?></p>
             
            </div>
            <div class="card-footer text-muted">
               <?php  
               
            
                # echo $re->post_time;
                $str=$r->post_time;
                #echo date(' d- m- y ',strtotime($str));
                echo date(' h:m A,l - d M Y ',strtotime($str));
                #print_r($r->to_array());
                
                
                $us=User::find_by_id($r->user_id);
                #print_r($us->to_array());
                #echo  $us->fname;
                ?>
                <h3>by</h3>
              <a href="#"><?php echo  $us->fname." ".$us->lname  ;?></a>
            </div>
          </div>
<?php
            
            }
            }
            ?>
          
            
           
        </div>
      </div>
    </div>
    </div>
 
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>copyright&copy;myteam2018</h5>
</footer>



</body>
</html> 

