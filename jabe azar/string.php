<?php
$name ="1001212121212121";
echo is_string($name).strlen( $name)."<br>";
$test ="pooyava\nlikahanli";
echo nl2br($test); 
$num=1000000000000000000;
echo "<br>".number_format($num);
$arry= "hi pooya gkjdkjslsakd jdlajdlsklsds";
echo "<br>";
print_r(explode(" ",$arry));
//str_token 
$string2 ="hi pooya this is cscode config for php developer ";
$tok=strtok($string2," ");
while($tok==true){
echo" $tok <br>";
$tok=strtok(" ");
}