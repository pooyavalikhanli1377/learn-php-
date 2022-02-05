<?php
include 'jdf.php';
//$time= time();
//echo $time;
//echo jdate('Y/m/d',time());

function tabdil (string $time){
 $time =$_GET["time"];
$array =explode('-',$time );
list($yar,$mot,$date)=$array;
echo "<br>".$yar."<hr>".$mot."<hr>".$date;
$t=mktime($mot,$date,$yar);

echo"<hr><br>".jdate("Y/m/d",$t,"",'Asia/Tehran') ;;
return ;
}