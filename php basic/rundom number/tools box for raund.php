<?php 
//raund():
echo"rund: ". rand(0,10);
//mtrand
echo "<br> mt_rand: ".mt_rand(0,100);
//random-int
echo "<br> rumdom-int: ". random_int(1,1000);
//randome-bytes 
echo "<br> random-byts: ".bin2hex( random_bytes(8));
//openssl-randm-psendo-bytes
echo "<br> openssl-randm-psendo-bytes: ".bin2hex( openssl_random_pseudo_bytes(100));
//the end of rundome funtuion 
include 'myfuntion for random number.php';
echo"<hr>".rand1(200);
echo "<hr>in tabe be shek daste dakhel kode mota=gayr add mizare :<br>".rand2();