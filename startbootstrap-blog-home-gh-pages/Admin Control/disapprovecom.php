<?php

require_once"config.php";
print_r($_POST);
if(isset($_GET["commid"])){




$coms=Comment::find_by_id($_GET["commid"]);
$coms->status="draft";




if(isset($_POST["reason"])){


header("Location:comments.php");
$coms->reason=$_POST["reason"];
$coms->save();

}
}
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta  equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>post</title>
        <link rel="stylesheet" href="Css/font-awesome.min.css">
        <link rel="stylesheet" href="Css/normalize.css">
         <link rel="stylesheet" href="Css/bootstrap.css">
        <link rel="stylesheet" href="Css/Project.css">
        <link rel="stylesheet" href="Css/hover-min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    
    <script src="JsFiles/html5shiv.min.js"></script>
        <script src="JsFiles/respond.min.js"></script>
</head>
<body>
  <div class="container-fluid">
  <div class="overlay">
    <!-- End header -->
    <div class="row header">
      <!-- start navbar -->
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hvr-grow" href="#"><span>Admin</span>Panel</a>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="linksNav nav navbar-nav">
              <li class="active"><a href="usersContol.php">Home<span class="sr-only">(current)</span></a></li>
              <li><a href="posts.php">Posts</a></li>
              <li><a href="comments.php">Comments</a></li>
             <li><a href="catogry.php">Catogry</a></li>
              <li><a href="usersContol.php">Users</a></li>
            </ul>
            <div class="dropdown">
                <button class="userName btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"  style="text-decoration: none;">
                  User name
                  <i class="fa fa-lg fa-user-circle fa-2" aria-hidden="true"></i>
                  <span class="caret"></span>
                </button>
                <ul class="userOptions dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                  
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>  
            </div> 
          </div>
        </div><!-- /.navbar-collapse -->
      </nav>
      <!-- end navbar -->
    </div>
    <!-- End header -->
    <!-- Start main content -->
    <div class="row main-content">
      <!-- Start Navigation -->
      <div class="navigation col-lg-3">
        <div class="nav-side-menu">
          <div class="brand">Services</div>
          <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
          <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
              <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg"></i>Tables<span class="arrow"></span></a>
              </li>
               
              <li data-toggle="collapse" data-target="#Exam" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Catogry<span class="arrow"></span></a>
              </li>  
                
              <li data-toggle="collapse" data-target="#Report" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i>Users<span class="arrow"></span></a>
              </li>
               
              <li data-toggle="collapse" data-target="#Admin" class="collapsed">
                <a href="posts.php"><i class="fa fa-globe fa-lg"></i>Posts<span class="arrow"></span></a>
              </li>

              <li data-toggle="collapse" data-target="#Admin" class="collapsed">
                <a href="comments.php"><i class="fa fa-globe fa-lg"></i>Coments<span class="arrow"></span></a>
              </li>
                <ul class="sub-menu collapse" id="Admin">
                 
                </ul>
            </ul>
          </div>
          <div class="text">
            
          </div>
        </div>
        <div class="comment-content">
          <span >To enhance our services please add your comment </span>
          <div class="input-group">
            <textarea type="text"  placeholder="add your comment" aria-describedby="basic-addon1" style="border-radius: 5px;"></textarea>
          </div>
          <button type="button" class="btn btn-primary ">Add</button> 
        </div>
      </div>
      <!-- End Navigation   -->
      <!-- Start Question Content -->
      <div class="question-content col-lg-9">
        <h3>
         Comments
          <img src="Css/Images/icons/question-mark.png">
        </h3>
        <div class="panel panel-default" >
          <div class="panel-body" style=" background-color:  whitesmoke;">
            
              
             
               </form method="post">
              <div class="panel panel-default" style="    margin-top: 30px; text-align: center;  ">
              <!-- Default panel contents -->
                  <!-- Table -->
                 <form method ="POST">
                 <div class="comment-content" style="width: 800px;height:500px;text-align:center; ">
          <span >Enter The Reason Of Disapprove comments here </span>
          <div class="input-group" >
            <textarea type="text"  placeholder="add your Reason" aria-describedby="basic-addon1" style="border-radius:15px;margin: 60px" rows="7" cols="60"  name="reason" required></textarea>
          </div>
          <input type="submit" name="Deactive"class="btn btn-primary " value="Disapprove" style="margin: 10px;">
        </div>
              </div>
              </div>
           
          </div>
        </div>
      </div>
      <!-- End Question Content   -->
    </div>
    <!-- End main content   -->
    <div class="row footer-content">
      <div class="col-sm-2">
        <ul>
          <li><a href="">News Feed</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Ask Question</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul>
          <li><a href="">Developer</a></li>
          <li><a href="">Company</a></li>
          <li><a href="">Call Us</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <ul>
          <li><a href="">Contact Us</a></li>
          <li><a href="">Help</a></li>
          <li><a href="">About</a></li>
        </ul>
      </div>
      <div class="col-sm-4 ">
        <ul class="list-unstyled socialMedia">
          <li><a href="https://www.facebook.com/Mans.Edu.N.N/">
               <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
               <span>&nbsp;facebook</span>
              </a>
          </li>   
          <li><a href="https://www.google.com.eg/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=0ahUKEwizopXau4bSAhVMOMAKHYVBBykQFggeMAE&url=https%3A%2F%2Fplus.google.com%2F108358259058377337961&usg=AFQjCNG4uU1NChmOtEexM7PGkKqDBaeGYg&sig2=K3eAAiB-4wP0J3z31z-YoQ&bvm=bv.146786187,d.ZGg">
                <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                <span>&nbsp;google</span>
              </a>
          </li>           
          <li><a href="https://www.google.com.eg/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjiw_DNu4bSAhWrA8AKHZLLD6kQFggYMAA&url=https%3A%2F%2Feg.linkedin.com%2Fin%2Fmansoura-university-a4318484&usg=AFQjCNE-TV43cBVQXc0RNGoLSrWxaklnMQ&sig2=gGnI2eQw4v99qjSCdwPsuQ&bvm=bv.146786187,d.ZGg"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i><span>&nbsp;linkedin</span></a></li>
          <li><a href="https://twitter.com/elkenawy010"><i class="fa fa-twitter-square fa-2x" aria-hidden="true">
          </i><span>&nbsp;twitter</span></a></li>     
          <li><a href="https://www.youtube.com/user/mansvu"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i><span>&nbsp;youtube</span></a>
          </li>       
        </ul>
      </div>
      <div class=" col-sm-12 copy-right">
        Copyright &copy; 2017 <span>.FCI Elmansoura</span>
      </div>
    </div>
  </div>   
  </div>    
    <!-- script tags -->
    <script src="JsFiles/jquery-1.12.0.js"></script>
    <script src="JsFiles/bootstrap.min.js"></script>
    <script src="JsFiles/jquery.js"></script>
    <script src="JsFiles/jquery.nicescroll.min.js"></script>
    <script src="JsFiles/home.js"></script>
      <script src="JsFiles/typed.min.js"></script>
</body>
</html>

