<?php
/*$x=array();syntax Array
$x=[];syntax Array
*/
//indexed array 
$car=array("bmw","banz","pooya",1212.555);
print_r($car[3]);
echo "<hr>";
//var_dump($car);
//associative array 
$capital_city=array("iran"=>"tehran","japan"=>"tokyo","england"=>"london");
echo$capital_city["japan"]."<br>";
$ages=["pooya"=>23,"ali"=>20,"peyman"=>28,50,20,40];
var_dump($ages);
echo"<br>".$ages[0];//index 0 ke az 50 shoroe mishvad chon ke khodam index brash tarif nakardam 
echo"<hr>";
//multidimensional-arrays ya arraye chand bodi
$user=array(
    array(
        "name"=>"pooya",
        "lastname"=>"valikhanli",
        "age"=>"23",
        "phone number"=>"0366988512",
        "email addres"=>"pooya@gmail.ocm",
         "username "=>"pooya", 
        "password"=>"123456789"
    ),
    array( 
        "name"=>"ali",
    "lastname"=>"bagheri",
    "age"=>"21",
    "phone number"=>"09365428",
    "email addres"=>"ali@gamil.com",
     "username "=>"ali", 
    "password"=>"5558788"
    ),
    array(
         "name"=>"peyman ",
    "lastname"=>"valikhanli ",
    "age"=>"28",
    "phone number"=>"2321516135513",
    "email addres"=>"peyman@gmail.com ",
     "username "=>"peyman", 
    "password"=>"51623265"
    )
) ;
echo "name: ".$user[0]["name"]."lastname".$user[0]["lastname"];
