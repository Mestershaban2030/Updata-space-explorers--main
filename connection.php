<?php

$host="localhost";
$user="root";
$pass="";
$db="space_explorer_db";
try{
$con=mysqli_connect($host,$user,$pass,$db);
$con->set_charset("utf8");
}catch (mysqli_sql_exception){
    echo"could not connect";
}



?>
