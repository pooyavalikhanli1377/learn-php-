<?php
//time stamp my age 
date_default_timezone_set("asia/tehran");
$date= mktime(0,0,0,8, 25,1998);
echo $date;
$r=date('Y/M/d',$date);
echo "<hr>$r <hr>";
echo time();
?>