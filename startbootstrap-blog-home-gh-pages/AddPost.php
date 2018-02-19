

  <?php
   
 require_once ('config.php');
print_r($_POST);
print_r($_GET);
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
//echo $name;
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
//echo $image;
         
    
            
            
$categ=Category::all(array('conditions'=>array('title=?',$_POST["category"])));
            foreach($categ as $c){
                
                
                $i=$c->id;
               // echo " id of cat= ".$i;
            }
            
       // Insert record
            
            
            $post=new Post();
            //echo $_POST["title"];
    $post->title=($_POST["title"]);
   //echo $_POST["content"];
    $post->content=( $_POST["content"]);
    //$Post->status="active";
    $post->cat_id=($i);        
    $post->user_id=($_GET["id"]);        
   $post->post_time=date("h:i:sa");
            print_r($post);
    $post->imagename=($name);
    $post->image=($image);
            
    $post->save();

echo $_GET["id"];
            
            echo "image name is ".$name;

         //   $query = "insert into images(name,image) values('".$name."','".$image."')";
           
          //  mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);

        }
    
    }

header('Location: index.php?');
    ?>