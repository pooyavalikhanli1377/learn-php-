<?php
function rand1($a):string {
$input= "abcdefghigklmniupotyrwq123456789!@#$%^&*";
$chaerlent=strlen($input);
echo $chaerlent;
$randomestring= '';
for($i=0;$i<$a;$i++){
$randomestring.=$input[rand(0,$chaerlent -1)];
}
return $randomestring;
} 
//funtion dasti 
function rand2($b=10){
 $input="qwertyuiopasdfghjklzxcvbnm123456789!@#$%^&*";
 $chatlent=strlen($input);
 $print='';
 for($i=0;$i<$b;$i++){
  $print.=$input[rand(0,$chatlent -1)];
 }
return $print;
}

