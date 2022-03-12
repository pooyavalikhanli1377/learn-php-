<?php
/*
$user=array(
    array(
        "name "=>"pooya",
        "lastname"=>"valikhanli",
        "age"=>"23",
        "phone number"=>"0366988512",
        "email addres"=>"pooya@gmail.ocm",
         "username "=>"pooya", 
        "password"=>"123456789"
    ),
    array( 
        "name "=>"ali",
    "lastname"=>"bagheri",
    "age"=>"21",
    "phone number"=>"09365428",
    "email addres"=>"ali@gamil.com",
     "username "=>"ali", 
    "password"=>"5558788"
    ),
    array(
         "name "=>"peyman ",
    "lastname"=>"valikhanli ",
    "age"=>"28",
    "phone number"=>"2321516135513",
    "email addres"=>"peyman@gmail.com ",
     "username "=>"peyman", 
    "password"=>"51623265"
    )
) ; 
print_r($user);
echo"<hr>"; 
var_dump($user);
echo"<hr>";*/
$user=array(
"student1"=>[
    "name "=>"pooya",
    "lastname"=>"valikhanli",
    "age"=>"23",
    "phone number"=>"0366988512",
    "email addres"=>"pooya@gmail.ocm",
     "username "=>"pooya", 
    "password"=>"123456789"
],
"student2"=>[ 
    "name "=>"ali",
"lastname"=>"bagheri",
"age"=>"21",
"phone number"=>"09365428",
"email addres"=>"ali@gamil.com",
 "username "=>"ali", 
"password"=>"5558788"
],
"studet3"=>[
     "name"=>"peyman ",
"lastname"=>"valikhanli ",
"age"=>"28",
"phone number"=>"2321516135513",
"email addres"=>"peyman@gmail.com ",
 "username "=>"peyman", 
"password"=>"51623265"
]
) ; 
print_r($user);
echo"<hr>"; 
var_dump($user);
echo"<hr>";
echo $user["studet3"]["name"];
