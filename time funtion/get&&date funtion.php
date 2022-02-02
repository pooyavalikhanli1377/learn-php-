<?php
//time stamp my age 
date_default_timezone_set("asia/tehran");
$date= mktime(0,0,0,8, 25,1998);
$r=mktime(0,0,0,1,30,2022);
echo $date;
$age =date('Y/M/d',$date);
echo "<hr>$age <hr>";
?>