<?php 
include  "connection.php" ;
$date=["fname"=>"p''/eyman",
        "lname"=>"valikhanli", 
        "age"=>23
];
$sql="  INSERT  INTO users (fname, lname, age )  VALUES ('{$date['fname']}','{$date['lname']}','{$date['age']}' ); "; 
if($conn->query($sql)){
    echo "inset the firstname :{$date['fname']} and the lastname:{$date['lname']} and age:{$date['age']} "; 
}else {
    echo "don insert this ". PHP_EOL . "ERROR NUMBER " . $conn->errno. PHP_EOL."ERROR TEXT : ". $conn->error;  
}