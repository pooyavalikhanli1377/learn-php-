<?php
include "connection.php";
#user data 
$user_date_id =7;
$sql = "DELETE FROM  users where id = ?";
$stm = $conn->prepare($sql);
$stm->bind_param('i', $user_date_id);
$stm->execute();
#devloper data
// if ($conn->query($sql)) {
//      echo "deleted  ";
// } else {
//     echo "<br>this not work <br> "  . $conn->errno . PHP_EOL . $conn->error;
// }
