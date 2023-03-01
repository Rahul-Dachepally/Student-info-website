<?php
session_start();
include "tables.php" ;
if (isset($_SESSION['id']) && isset($_SESSION['uid'])) {
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        </head>

        <body>
        <h1> hi , <?php echo $_SESSION['uid']; ?> </h1>
        <a href='/dbms/logout.php'><button>Logout </button></a> 
        <p>&nbsp;</p> <?php //delete nbsp later  ?>
        <a href='/dbms/newform.php'><button>Create </button> </a>
        <p>your forms : </p>
        <?php // flower bracket is in php so we have come back to ph

    $id = $_SESSION['id'] ;
    $sql = "SELECT COUNT(*) as total FROM utables WHERE id_f_u ='$id' "; 
    $result = mysqli_query($forms , $sql) ;
    $row = mysqli_fetch_assoc($result);
    $n = $row['total'] ;
    
    $sql = "SELECT id,tablename FROM utables WHERE id_f_u = '$id' "; 
    $result = mysqli_query($forms , $sql) ;
    while($row = mysqli_fetch_assoc($result))
    { ?>
    <form method="post">
        <p> <button type="submit" name = "tableid" value =<?php echo $row['id'];?> >
        <?php echo $row['tablename']; ?></button> </p>
    </form>
      <?php
    }
    if( isset($_POST['tableid'])){
        $_SESSION['tableid'] = $_POST['tableid'] ;
        header("Location:view.php") ;
    }
}

else {
        header("Location:index.php");
        exit();
}
        ?>

    </body>
</html>