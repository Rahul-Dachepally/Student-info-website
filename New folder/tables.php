<?php

$s_name = "localhost" ;
$uname = "root" ;
$password = "" ;

$db_name = "tables";

$forms = mysqli_connect($s_name , $uname , $password , $db_name) ;

if(!$forms){
    echo "Connection Failed" ;
}