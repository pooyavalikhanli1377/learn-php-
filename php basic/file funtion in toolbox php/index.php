<?php 
#file chek 
echo is_file('po.php');
#file_exists
echo '<br>'. file_exists('C:\xampp\htdocs\test.php\git\pooya.php');
#maik file 
echo "<hr> <h1>make folder in desktop</h1> ";
$addresfille="C:\Users\pooyavalikhanli\Desktop\Newfile";
echo "<br> test ".file_exists($addresfille);
if(!file_exists($addresfille)){
 echo "<hr>this file is  create";
 mkdir($addresfille);
 date_default_timezone_set('asia/tehran');
 $time=date('Y-m-d h:i:s',time());
 echo $time;
 for ($i=0;$i<10;$i++) {
  $open=fopen("C:\Users\pooyavalikhanli\Desktop\Newfile\ new.txt",'a+');
     fwrite($open, "log addres $addresfille =>>>>$time".PHP_EOL);
     fclose($open);

 }
  
} else {
    echo "<hr>this file is not create ";
}


///read
echo "<hr> red the file in web page <br> ";
//fgetc funtion 
$open=fopen("C:\Users\pooyavalikhanli\Desktop\Newfile\ new.txt", 'r');
for ($i=0;$i<5;$i++) {
    echo fgetc($open);
}
//fgets function 
echo "br";
for ($j=0; $j<=10;$j++){
 echo "<h4>".nl2br(fgets($open))."</h4>";
}
#filesaize and filetype
echo "<h3><br>size of file: ".filesize('C:\Users\pooyavalikhanli\Desktop\Newfile\ new.txt')."<br> type of file ".filetype('C:\Users\pooyavalikhanli\Desktop\Newfile\ new.txt')."</h3>";
//chown($open,root);
#chgrp($open,"admin");
#chmod($open,0777);
var_dump( glob("*i*.php"));
fclose($open);

