
<?php

require_once"config.php";

session_start();
//echo " user id is : ".$_SESSION['id'];

$userid=$_SESSION['id'];

if(!isset($userid)){
    
    header('Location:http://localhost/PHP_project/startbootstrap-blog-home-gh-pages/rigster/index.php');
}
?>

<!-- Post Form to add post -->
<div  class="card my-4"style="border: 2px red solid;width:95%;margin:10px auto;position:  relative;height: 450px;" >
         <div  class="card my-4" style="width: 550px;border:2px black solid;position:  absolute;left: 70px;">
            <h5 class="card-header">Add your Post</h5>
            <div class="card-body">
            
              <form action="AddPost.php?id=<?php echo $userid; ?>"  method="post"  enctype='multipart/form-data' >
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                  <textarea class="form-control" rows="3" name="content" required placeholder="your post" ></textarea>
                  
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
    
    
    
     <!-- Categories Widget -->
          <div class="card my-4" style="width:200px;border:2px black solid;display: inline-block;position:  absolute;right: 70px; height:320px">
            <h5 class="card-header">Categories</h5>
              
            
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                      
                      <?php
                        $C=Category::find('all');
                        $i=1;
                      
                        foreach($C as $r)#{print_r($r->to_array());}
                        {  

                      
                      
                      ?>
                    <li style="display:inline-block">
                      <a  href="index.php?id=<?= $r->id?>"> <?php echo $r->title ; ?></a>
                    </li>
                    <?php
                      
                      
                      $i++;
                      
                      ?>
                      <br>
                      <?php
                      
                        }
                      ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>


    </div>
<?php

if (isset( $_GET["id"])){
$id= $_GET["id"];
}else{
    
    
            $opti=array('limit'=>10,'order'=>'id desc');
    
           $res=Post::all($opti);
            
            foreach($res as $r)#{print_r($r->to_array());}
            {
            $post_id= $r->id;
               echo $post_id;
              //  echo $r->image;
                //class="card mb-4"
           ?>
            
            <div   style="width:500px; border:2px black solid ;  margin:20px auto; padding:10px;  ">
                
                
                
                
                
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
                   <br><br> <a href="indexP.php?id=<?php echo $post_id;?>"  class="btn btn-primary">Show complete post &rarr;</a></p>
          
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
           
            
    #--------------------------------------------------------------------------------
    
    
    
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Nexus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <!--<span class="sr-only">(current)</span>-->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Myprofile.php?id=<?php echo $userid;?>">profile</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="logOut.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>
<?php
            if (isset( $_GET["id"])){
            $res=Post::all(array('conditions'=>array('cat_id=?',$_GET["id"])));
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
          

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          
          <!-- Categories Widget -->
          <div class="card my-4" >
            <h5 class="card-header">Categories</h5>
              
            
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                      
                      <?php
                        $C=Category::find('all');
                        $i=1;
                      
                        foreach($C as $r)#{print_r($r->to_array());}
                        {  

                      
                      
                      ?>
                    <li>
                      <a  href="index.php?id=<?= $r->id?>"> <?php echo $r->title ; ?></a>
                    </li>
                    <?php
                      
                      
                      $i++;
                      
                      ?>
                      <br>
                      <?php
                      
                        }
                      ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
