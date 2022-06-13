<?php 
include_once "conncetion.php"; 
$sql= "DELETE FROM user2 WHERE id =:i"  ; 
$stm = $db->prepare($sql);
 $stm->execute(["i"=>18]);  