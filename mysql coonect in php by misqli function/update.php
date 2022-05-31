<?php
include "connection.php";
// $sql = "UPDATE users set age =age+10 where fname like 'p%'";
$sql1 = "UPDATE users set age = ?  where fname like 'd%'";
// $stm=$conn->prepare($sql); 
// $stm->execute(); 
// print_r($stm);
#user data 
$age= 3993; 
$stma1=$conn->prepare($sql1); 
$stma1->bind_param('i',$gae);
$stma1->execute();
print_r($stma1);
 

