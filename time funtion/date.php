<?php
date_default_timezone_set('asia/tehran');
echo date('Y/m/d') . "<hr>";
echo date('h:i:s'). "<hr>";
//time stamp 
echo time() . "<hr>" ;
//mohasebe time ba time stamp 
$time =time();
echo date('y/m/d . h:i:s',$time) ."<hr>";
##sakhte tarikh ba time stamp
$mktime=mktime(13,20,20,12,15,2025);
$r=date('Y/m/d   , h:i:s',$mktime);
echo "$r<hr> " ;
