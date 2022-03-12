<?php 
//funtion for print array
function print1($array){
 echo "<hr>";
return  print_r($array);

};
function print2($array){
 echo "<hr>";
 return var_dump($array);

};

$array1= ["number1"=>["1"=>"tyttt","2"=>"ssadasd","3"=>"sadasdafasf"],
"number 2"=>["sdasd","asdasd","assdas"]
];
print1($array1);
print2($array1);