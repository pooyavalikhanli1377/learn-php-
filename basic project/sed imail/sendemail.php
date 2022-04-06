<?php
session_start();
$msg = null;

echo $_SERVER["REQUEST_METHOD"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['send']) && !empty($_POST['send'] == "send")) {
    if (isset($_POST['email']) && isset($_POST['youremail']) && !empty($_POST['email'])&&!empty ($_POST['youremail'])) {
      if (isset($_POST['subject']) && !empty($_POST['subject'])) {
        $youremail = $_POST['youremail'];
        $email = $_POST['email'];
        $subject=$_POST['subject'];
        $masseg=$_POST['masseg'];
        mail($email,$subject,$masseg);
        $msg = "ارسال شد";
      } else {
        $msg = "لطفا مضوع خود را مشخص کنید ";
      }
    }
   else {
      $msg = "یک از فیلد های ایمل خالی میباشد ";
    }
  }
}
$_SESSION['msg'] = $msg;
header("Location:index.php");
