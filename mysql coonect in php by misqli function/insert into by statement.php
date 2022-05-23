<?php 
include "connection.php"; 
$data=[ "fname"=>"dasdassdasdd", 
"lname"=> "kskdfsndfknksndf",
 "age"=>43 ]; 
$sql ="INSERT INTO users (fname,lname,age) values (?,?,?);" ;
$stement=$conn->prepare($sql);
$stement->bind_param('ssi',$data['fname'],$data['lname'],$data['age']); 
$stement->execute(); 
$stement->close(); 
  