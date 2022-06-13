<?php
include_once "conncetion.php";
$sql = "SELECT * FROM user2 ";
$stm = $db->prepare($sql);
$stm->execute();
$col = $stm->fetchAll(PDO::FETCH_OBJ);
tests($col);

//in the function get culmn 
function tests($rows)
{
    foreach ($rows as $col) {
        test($col);
    }
}
//in th function echo culmn 
function test($row)
{
    echo implode("-", (array)$row) . PHP_EOL;
}


//by while 
while ($col2 = $stm->fetch(PDO::FETCH_OBJ)) {
   test( $col2) ;
}
