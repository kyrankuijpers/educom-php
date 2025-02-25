<?php

$age = array("Peter" => 35, "Kyran" => 29, "Joe" => 43);
$age_in_json_format = json_encode($age);
echo $age_in_json_format;
echo "<br>";
$cars = array('volvo', 'citroen', 'peugeot');
$cars_in_json_format = json_encode($cars);
echo $cars_in_json_format;
echo "<br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$phpobj = json_decode($jsonobj);
$phpassoc = json_decode($jsonobj, true);
echo "<br>";
var_dump($phpobj);
echo "<br>";
var_dump($phpassoc);
echo "<br>";

echo $phpobj->Ben;

?>