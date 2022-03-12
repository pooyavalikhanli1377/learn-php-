<?php
$int = 22;
$string = 'hi ';
$null = null;
$array = ['sdsf ', 'sdfsdf,sdf', 'sfsdfsdfsfggsaSD'];
$bool = false;
//get data type 
echo gettype($int) . "<br>" . gettype($null) . "<br>" . gettype($string) . "<br>";
echo empty($null) . "<br>" . isset($null) . "<br>";
echo is_array($array) . '<br>' . is_bool($bool) . '<br>' . is_string($string) . "<br>" . is_iterable($array) . '<br>' . is_long($int);
//serialize
$array2 = ['dfs', 'dfa', 'dfasdf', 12121, 8588588585];
$seriallize = serialize($array2);
$unseriallize = unserialize($seriallize);
echo "<br>$seriallize<br>";
print_r($unseriallize);




