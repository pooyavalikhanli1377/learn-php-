<?php

//if 
if (1 < 2) {
    echo "true <hr>";
}
//if,else
if (11 <= 11) {
    echo "true";
} else {
    echo "false";
}
//if else if
if (1 <= 1) {
    if (1 >= 2) {
        echo "if todar toa ";
    }
} else {
    echo "gjjkgjkmmfkmskfm";

}

//msal dastrsi hay users ba if elseif

$users = array(
    "user1" => ["name" => "ali", "rol" => "admin", "age" => 27],
    "user2" => ["name" => "peyman", "rol" => "tarah", "age" => 30],
    "user3" => ["name" => "pooya", "rol" => "stduser", "age" => 28]
);
$users = json_encode($users);
$users = json_decode($users);
//var_dump($users);
if ($users->user1->rol == "admin1215") {
    echo $users->user1->name . " " . $users->user1->rol . " " . $users->user1->age . "<hr>";
} elseif ($users->user2->rol == "tarah") {
    echo $users->user2->name . " " . $users->user2->rol . " " . $users->user2->age . "<hr>";
} elseif ($users->user3->rol == "stduser4") {
    echo $users->user3->name . " " . $users->user3->rol . " " . $users->user3->age . "<hr>";
}
