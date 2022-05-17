<?php 
include "connection.php";
$create_table="create table users
(id int not null AUTO_INCREMENT, 
fname varchar(101),
lname varchar(100),
age int(3),
primary key (id));";
if($conn->query($create_table)){
    echo "this is crate table in your database  ".$dbname .PHP_EOL;
} else {
    echo "this is not crate table in your table and your error is ::<br> ".$conn->error."<br>"."uyor error number is :<->:".$conn->errno.  PHP_EOL;
}