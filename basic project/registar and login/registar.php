<?php
include "connection.php";
$username = $_POST['fname'] . $_POST['lname'];
$sql = "INSERT INTO user2 (fname , lname ,age , password_useer, username ) values (?,?,?,?,?)";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
       if(isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['age']) && !empty($_POST['age'])&& isset($_POST['pasword'])&&!empty($_POST['pasword'])) {
            $data=["fname"=> $_POST['fname'],"lname"=> $_POST['lname'],"age"=> $_POST['age'],"pasword"=> $_POST['pasword'] ];
            print_r($data);
            $stm = $connect->prepare($sql);
           $stm->bind_param('ssiss', $_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['pasword'], $username);
           echo$_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['pasword'], $username;
            $stm->execute();
            $stm->close();
        }else {echo "not good"; }
    }
}
