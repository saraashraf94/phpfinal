<?php
require_once ('config.php');
session_start();
//if(isset($_POST['submit'])){

//   $comment=Comment::find_by_id(1);
//   $comment->content;
//print_r($_GET);
$user_id=$_SESSION['id'];
$post_id=$_GET["id"];
echo $post_id;
/*if(isset($_POST['comment']) && isset($_POST['title'])){

    $comm= ($_POST['comment']);
    $tit=($_POST['title']);


    $comment=new Comment();
    $comment->title=($tit);
    $comment->content=($comm);
    $comment->status="draft";
    $comment->user_id=1;
    $comment->post_id=1;
    $comment->save();


}

else{

echo"fill";

}


*/

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>



  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Myprofile.php?id=<?php echo $user_id;?>">Profile</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="logOut.php">LOG Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

         

          <hr>

          
            <?php
            $res=Post::all(array('conditions'=>array('id=?',$post_id)));
            #print_r($res);
            foreach($res as $r)#{print_r($r->to_array());}
            {
            $post_id= $r->id;
                //echo $post_id ;
            ?>
          <!-- Blog Post -->
         <div class="card mb-4"><?php
         #echo $r->imagename;
             
             ?>
                <div class="card-body">
              <h2 class="card-title"><?php echo $r->title ; ?></h2>
              <p class="card-text"><?php
                
                //echo $post_id;
                echo $r->content;
                
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
                
                <img class="card-img-top" src='<?php echo $r->image;?>' alt="Card image cap">
            </div>
          </div>
            
         
<?php
            }
            
            ?>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
               
              <form action="addComment.php?id=<?php echo $post_id;?>"  method="post" >
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                  <textarea class="form-control" rows="3" name="comment" required ></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
               
            </div>
          </div>

          <!-- Single Comment -->
       
          
          
       <!-- // $rows = array();
          
        // $query=Comment::find_by_id(1);
          
        // $query->content;

        // foreach($rows as $query){

   //  while ($row = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) { -->
            
            
            <?php
            $coms=Comment::all(array('conditions'=>array('post_id=?',$_GET["id"])));
            #print_r($res);
            foreach($coms as $r)#{print_r($r->to_array());}
            {
               //  echo $userid; 
            //$post_id= $r->id;
                //echo $post_id ;
            ?>
        
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                
                <?php 
                   // echo $r->user_id;
                     $us=User::all(array('conditions'=>array('id=?',$r->user_id)));
                    foreach($us as $u)#{print_r($r->to_array());}
                    { 
                
                ?>
                <h4><a href="#"><?php echo $u->fname . " ". $u->lname; }?></a></h4>
                <h3 class="mt-0"><?php echo $r->title; ?></h3>
                <p><?php echo $r->content; ?></p>
                <h6 class="mt-0"><?php echo $r->comment_date; ?></h6>
                  
            </div>
          </div>

          <?php  
            }
            ?>
        
 

        
                
                </div>
              </div>

            </div>
          

       

     
      <!-- /.row -->

   
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
