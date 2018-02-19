<?php

require_once"config.php";

//print_r($_GET);

echo $_GET["id"];

$res=Post::all(array('conditions'=>array('cat_id=?',$_GET["id"])));
#print_r($res);
foreach($res as $r)#{print_r($r->to_array());}
{
    
     
    echo $r->title ." ". $r->content; ?>

<br>


<?php
}
$conn= mysqli_connect('localhost','root','','blogapp');
if(mysqli_connect_errno()){
    		echo "connection failed";
    		//echo mysqli_connect_error();
    		exit;
	
	}

$query="select * from users";
// die($query);
$student = mysqli_query($conn,$query);
//3- check result
if(!$student){
    echo mysqli_error($conn)."<br>";
    exit;
}
?>
<h2>List of students</h2>
	   <table>
       <tr>
              	<th>ID</th>
          	<th>first name</th>
          	<th>last name</th>
           	
        <?php
            while ($students = mysqli_fetch_assoc($student)) {
               ?>
                <tr>
                    <td><?= $students['id'] ?></td>
                    <td><?= $students['Fname'] ?></td>
                    <td><?= $students['email'] ?></td>
                    

                    <td>
                        <a href="edit.php?id=<?= $students['id']?>">edit</a>
                        <a href="delete.php?id=<?= $students['id'] ?>">delete</a>
                    </td>
                </tr>
               <?php
            }
        ?>
   </table>
<?php

?>