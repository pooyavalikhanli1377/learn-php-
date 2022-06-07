<?php
$host = "localhost";
$user = "root";
$dbname = "log";
$connect = new mysqli($host, $user, "", $dbname);
if ($connect->connect_errno) {
    echo "okey";
} else {
    echo "this is not connect :</br>connect error :".  $connect->connect_error. "</br>error number :". $connect->connect_errnr ;
}

