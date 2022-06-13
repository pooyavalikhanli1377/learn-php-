<?php
include_once "conncetion.php"; 
$sql= "UPDATE user2 SET  age= 9 where id = 33" ; 
$stm=$db->prepare($sql); 
$stm->execute();  
echo$stm->rowCount(); 
