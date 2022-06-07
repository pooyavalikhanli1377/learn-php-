<?php
include_once "connection.php";
session_start();
$msg = null;
echo"<br>". $user_name = $_POST['username'];
echo"<br>". $password = $_POST['password'];
$sql = "SELECT * FROM user2 ";
$stm = $connect->prepare($sql);
//$stm ->bind_param('ss', $user_name , $password); 
$stm->execute(); 
echo $stm->bind_result($id,$fname , $lname, $age,$user, $psw);
$stm->fetch();

// if ($user_name === $user && $password === $psw) {
// } else {
//     echo "username or password is not true";
// }
