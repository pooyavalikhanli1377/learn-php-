<?php

if (isset($_POST["send"])) {
 cratepassword();
}
function cratepassword()
{
 session_start();
 $msg=null;
  
 if (isset($_POST["number"]) && !empty($_POST["number"])) {
  $lanpassword = $_POST["number"];
  $lanpassword *= 1;
 } else {
  $msg="is not set vlaue";
 }
 $keyword = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789!@#$%^&*";
 $lan = strlen($keyword);
 $password = '';
 for ($i = 0; $i <   $lanpassword; $i++) {
  $password .= $keyword[rand(0, $lan - 1)];
 }
 $msg= "your password is :". $password;
 $_SESSION ['msg']=$msg;
header("Location:random.php");
}
