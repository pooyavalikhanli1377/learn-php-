<?php
$car = array("iran", "afefsasf", "sfasf", "fasf");
$car2 = (object)$car;
print_r($car2);
echo "<hr>";
//tabdil mostagim object be array 
$car3 = (array)$car2;
print_r($car3);
echo "<hr>";
//object  
$car4 = new stdClass;
$car4->name = "BMW";
$car4->yars = 2002;
$car4->gribox = "Auto";
var_dump($car4);
echo "<hr>";
echo ($car4->name) . " " . ($car4->yars) . " " . ($car4->gribox);
//call by refrenec
$car5=$car4; 
$car5->name="Banz";
echo"<hr>". ($car5->name)."<br>". ($car4->name);
//call by value
$int=10;
$int2=$int ;
echo"<hr>".$int." ///".$int2;
//mafhome call by value 
$int2=11212212;
echo"<hr>".$int." ///".$int2;
//clone :braye tagir call by refrence dar array va object be call by value 
$car6=clone $car4;
$car6->name="tiba";
echo"<hr>".$car6->name."<br>".$car5->name;