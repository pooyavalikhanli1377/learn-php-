<?php 
include_once "conncetion.php"; 
// $sql="INSERT INTO user2 (fname,lname,age) VALUES (?,?,?)";
// $stm=$db->prepare($sql);
// $stm->execute(["lkjsdlf","dfskjdf",23]); 
// $sql3="INSERT INTO user2 (fname,lname,age) VALUES (:fname,:lname,:age)";
// $stm3=$db->prepare($sql3);
// $stm3->execute(["fname"=>"ls","lname"=>"df","age"=>3]); 
$sql2="INSERT INTO user2 (fname,lname,age) VALUES (?,?,?)";
$stm2= $db->prepare($sql2); 
$u= [["dsd","SD",8],["sds","Sc",4],["saaaaf","adsd", 8 ]]; 
$db->beginTransaction();
foreach($u as $f){
  $stm2->execute($f);
  print_r($f) ;
}
exit(); 
$db->commit(); 