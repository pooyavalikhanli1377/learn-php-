<?php
include 'jdf.php';
//$time= time();
//echo $time;
//echo jdate('Y/m/d',time());

function tabdil ( string $time){
 $time =$_POST["time"];
list($yar,$mot,$date)=explode('-',$time );
$timestamp=mktime(0,0,0,$mot,$date,$yar);
echo jdate("Y/m/d",$timestamp,"",'Asia/Tehran','en') ;;
return ;
}

