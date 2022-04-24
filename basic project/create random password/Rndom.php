<?php
date_default_timezone_set("asia/tehran");
if (isset($_POST["send"])) {
 cratepassword();
}
// if (isset($_POST["save"])) {
//  sevepassword();
// }
function cratepassword()
{
 session_start();
 $msg = null;
$erorr=null;
 if (isset($_POST["number"]) && !empty($_POST["number"])) {
  $lanpassword = $_POST["number"];
  $lanpassword *= 1;
 } else {
  $msg = "is not set vlaue";
 }
 $keyword = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789!@#$%^&*";
 $lan = strlen($keyword);
 $password = '';
 for ($i = 0; $i <   $lanpassword; $i++) {
  $password .= $keyword[rand(0, $lan - 1)];
 }
 $msg = "your password is :" . $password;
 if (isset($_POST["ditail"]) && !empty($_POST["ditail"])) {
  $not = $_POST['ditail'];
  $floc = 'C:\xampp\htdocs\learn php\basic project\create random password\diteil password.txt';
  $time = date('Y/m/d H:i:s', time());
  $openfile = fopen($floc, 'a+');
  fwrite($openfile, "YOR DITAIL PASSWORD IS $not YOUR PASSWORD IS  $password IS SET IN $time " . PHP_EOL);
  fclose($openfile);
  $erorr ="your ditai; and password is save";
 } else {
  $erorr = "if save to fille Please Fill in the field ";
 }
 $msg = "your password is :" . $password;

$_SESSION['erorr']=$erorr;
 $_SESSION['msg'] = $msg;
 header("Location:index.php");
}
