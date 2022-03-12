<?php
//is_string &&strlen
$name ="1001212121212121";
echo is_string($name).strlen( $name)."<hr>";
//nl2br 
$test ="pooyava\nlikahanli";
echo nl2br($test)."<hr>"; 
$num=1000000000000000000;
echo number_format($num)."<hr>";
$arry= "hi pooya gkjdkjslsakd jdlajdlsklsds";
print_r(explode(" ",$arry));
echo "<hr>";
//str_token 
$string2 ="hi pooya this is cscode config for php developer ";
$tok=strtok($string2," ");
while($tok==true){
echo" $tok <br>";
$tok=strtok(" ");
}
//str-word-count funtion 
echo"<hr>". str_word_count($string2, )."<hr>";
//size of \
$arry1=['1'=>'fff',"2"=>'saffff','sarrrr','tuuuuh','as'];
var_dump($arry1);
echo"<hr>". sizeof($arry1)."<hr>";
//md5 funtion 
echo md5($test);
//stripos&&stpos
//echo "<hr>".strpos($name1,"va");
echo "<hr>".stripos($test,"v" );
//impload
echo"<hr>". implode($arry1)."<hr>";
//substr
echo substr($test,5)."<hr>";
//strstr
echo strstr("pooya valikhanli asdadasdasdasdasdasd", "li",false);
echo "<hr>".strstr("pooya valikhanli asdadasdasdasdasdasd", "li",true);
//str-replace 
$name1="pooya valikhanli";
echo "<hr>".str_replace("pooya","peyman",$name1);
//str-repeat
echo "<hr>".str_repeat($name1,10);
//str_shuffle
echo "<hr>". str_shuffle($name1);
//str-word-count
echo "<hr>".str_word_count($name1);



