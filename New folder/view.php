<?php
session_start();
include "tables.php" ;
if (isset($_SESSION['tableid']) && isset($_SESSION['uid'])) {
    $id = $_SESSION['tableid'] ;
    $sql = "SELECT tablename FROM utables WHERE id ='$id' "; 
    $result = mysqli_query($forms , $sql) ;
    $row = mysqli_fetch_assoc($result);
    echo $row['tablename'] ;
    $table = $id ;

    $sql = "DESCRIBE `$table` "; 
    $result = mysqli_query($forms , $sql) ; ?>
    <table>
        <tr>
    <?php
    $i = 0 ;
    while($row = mysqli_fetch_assoc($result))
    { ?>
        <th> <?php echo $row['Field']; ?> </th>
      <?php
      $c_name[$i] = $row['Field'] ;
      $i++ ;
    } ?>
        </tr>
    <?php
     $sql = "SELECT * FROM `$table` "; 
     $result = mysqli_query($forms , $sql) ;
     while($row = mysqli_fetch_assoc($result))
     { ?>
    <tr>
        <?php
        $j = 0 ;
        while($j < $i ){
        $temp = $c_name[$j++] ; ?>
        <td><?php echo $row[$temp];?></td>
       <?php
        }?>
    </tr><?php
     }
     ?>
    </table>
    <?php
    }
else {
    header("Location:home.php");
    exit();
}
?>