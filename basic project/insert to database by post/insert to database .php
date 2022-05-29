<?php


function post()
{
    session_start();
    $msg = null;
    $host = "localhost";
    $user = "root";
    $dbname = "test2";
    $connect = new mysqli($host, $user, "", $dbname);
    if ($connect->connect_errno) {
        echo "this concect ";
    }
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['age']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['age'])) {
        $data = [
            "fname" => $_POST["fname"],
            "lname" => $_POST["lname"],
            "age" => $_POST["age"]
        ];
        $sql = "INSERT INTO users (fname , lname , age )
            VALUES (?,?,?)";

        $statment = $connect->prepare($sql);
        $statment->bind_param("ssi", $data['fname'], $data['lname'], $data['age']);
        $statment->execute();
        $statment->close();
        $msg = "is  success full";
    } else {
        $msg = "is not send ";
    }
    $_SESSION['text'] = $msg;
    header("Location:form.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['send'])) {
        post();
    }
} else {
    echo  " you is not connect the sql and yor data in not insert to database ";
}
