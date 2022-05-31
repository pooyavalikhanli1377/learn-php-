<?php
include_once "connection.php";
$sql = "SELECT * FROM users";
$po = $conn->query($sql);
echo "<table>";
while ($row = $po->fetch_object()) {
    echo " <tr>";
    foreach ($row as $key => $value) {
        echo "<th>$value</th>";
    }
    echo "</tr>";
}
echo "</table >";
echo "</pre>";
$sql1 = "SELECT * FROM users ";
$stm = $conn->prepare($sql1);
$stm->execute();
$stm->bind_result($id,$fname ,$lname , $age);
echo "</br><table>";
while($stm->fetch()){
echo "<tr><th>$id</th><th>$fname</th><th>$lname</th><th>$age</th><tr>  ";
}