<?php 
$host ="localhost";
$user="root";
$dbname="test2";
$conn=new mysqli($host,$user,"",$dbname);
if ($conn->connect_errno){
    echo "this is not cconect -> yor error is ". $conn->connect_error.  PHP_EOL ;
} else{
    echo "you is conect the database and your error is -> ".$conn->error.PHP_EOL."and your error number  is ".$conn->errno . PHP_EOL;
} 
//print_r($conn);