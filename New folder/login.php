<?php

session_start();
include "database.php" ;

if( isset($_POST['uid']) && isset($_POST['pw'])) {

    function validate ($data){
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    
}


$uid = validate($_POST['uid']);
$pw = validate($_POST['pw']) ;

if(empty($uid)){
    header ("Location:index.php?error=user name is empty") ;
    exit() ;
}

else if (empty($pw)) {
    header ("Location:index.php?error=password is empty") ;
    exit();
}

$sql = "SELECT * FROM users WHERE u_id = '$uid' AND password = '$pw' " ;


$result = mysqli_query($connect , $sql) ;

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['u_id'] === $uid && $row['password'] === $pw ){
        echo "welcome ".$uid;
        $_SESSION['uid'] = $row['u_id'] ;
        $_SESSION['id'] = $row['id'] ;
        header("Location: home.php") ;
        exit();
    }
    else {
        header("Location: index.php ?error=Incorrect credentials ") ;
    }
}
else {
    header("Location:index.php") ;
    exit() ;
}

}
