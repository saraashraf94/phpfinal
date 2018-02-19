<?php

require_once"config.php";
$C=Category::find('all');
$i=1;

?>
<table>
    <tr>
        <td> id </td>
        <td>title</td>
    </tr>
<?php
foreach($C as $r)#{print_r($r->to_array());}
{  
    ?>
     <tr>
        <td> <?php echo $i ; ?> </td>
        <td> <a  href="index.php?id=<?= $r->id?>"> <?php echo $r->title ; ?></a> </td>
     </tr>
    
    <?php
    //echo $i ." " . $r->title ;
    $i++;
?>

<br>


<?php
}
?>
 </table>   
    


