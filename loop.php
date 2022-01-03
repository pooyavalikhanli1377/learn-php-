<?php
/*
$num=0;
//while loop 
while($num<=10){
 echo"$num<hr>";   
 $num++;
}
echo"<hr>";
$p=10;
//do while  loop 
do {
    echo"$p <hr>";$p--;
} while ($p> 0);
//for loop
for($i=0;$i<=10;$i++){
    $num=$num+$p;
    echo $num.'<hr>';
}*/
//foreach
/*
$user = ["pooya", "valikhanli", "faffafaf", "affsfasfasfasfasfasfas", "affffa"];
var_dump($user);
foreach ($user as $a) {
    if ($a == "pooya") {
        echo "hi you are admin <br>";
    } else if ($a == "valikhanli") {
        echo "hi you are student <br>";
    } else {
        echo "you are not Register <br>";
    }
}*/
$users = array(
    "1" => [
        "first_name" => "Hossein",
        "last_name" => "Taheri",
        "role" => "Admin",
        "age" => 17,
    ],
    "2" => [
        "first_name" => "Amir",
        "last_name" => "Salehi",
        "role" => "Auther",
        "age" => 18,
    ],
    "3" => [
        "first_name" => "Mahdi",
        "last_name" => "Emami",
        "role" => "User",
        "age" => 20,
    ]
);


$i = 0;
$keys = array_keys($users);

while($i < sizeof($users)){
    echo "{$users[$keys[$i]]['first_name']} - " . "{$users[$keys[$i]]['last_name']}" . "<br>";
    $i++;
}