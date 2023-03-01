<?php

$s_name = "localhost" ;
$uname = "root" ;
$password = "" ;

$db_name = "db";

$connect = mysqli_connect($s_name , $uname , $password , $db_name) ;

if(!$connect){
    echo "Connection Failed" ;
}

