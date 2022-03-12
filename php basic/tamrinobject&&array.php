<?php
//array
$singl = array("dsasd", "sdad", "sda", "sad");
print_r($singl);
$user = array("sdasd" => "sadad", "dsad" => "asdas");
echo "<hr>";
print_r($user);
$user2 = [
    "asd" => ["adsasd", "sadasd"],
    "asd2" => ["asdasd", "daasd", "sdasd"],
    "sadasdaas5d541" => [
        "sfsadas" => ["sdadasd", "asdasdasdas"]
    ],

];
echo"<hr>";
print_r($user2);
echo"<hr>";
$js=json_encode($user2);
print_r($js);
echo"<hr>";
$a=json_decode($js);
print_r($a);
echo"<hr>";
$r=json_decode($js,1);
print_r($r);
echo"<hr>";
$ob=(object)$user2;
print_r($ob);
$cat=new stdClass;
$cat->name="asdsdasd";
$cat->family="kansdkfn";
$cat->colore="dasdasd";
echo"<hr>";
print_r($cat);
echo"<hr>".$cat->name." ".$cat->colore;   