<?php
list($host, $dbname, $user, $password) = ["localhost", "log", "ro ot", ""];
try{
    $db=new pdo ("mysql:host=$host;dbname=$dbname", $user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING);
    echo "oky"; 
}catch(PDOException  $error)
{
    echo "is not connection " . $error->getMessage() ."line error in ". $error->getLine();
}