<?php
$str="";
array_push($str,454);
echo var_dump($str);
array_push($str,455);
echo var_dump($str);

$emp=array();
array_push($emp,45);
echo var_dump($emp);
array_push($emp,45);
echo var_dump($emp);

if (!is_array($str)) {
$str=array();
}
array_push($str,45);
echo var_dump($str);
?>