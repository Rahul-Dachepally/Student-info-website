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
        <>
        <p>hi</p>
        <a href='/dbms/home.php'><button> Cancel </button> </a>
</body >
</html> <?php
}
else {
    header("Location:home.php");
    exit();
}

