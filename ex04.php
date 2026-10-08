<?php

$a = 42;
$b = "42";
$c = 15.8;
$d = true;
$e = false;
$f = null;

echo "<pre>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);

$conversion1 = (int) "42";
$conversion2 = (int) 15.8;
$conversion3 = (string) 42;

echo "\nConversions :\n";
var_dump($conversion1);
var_dump($conversion2);
var_dump($conversion3);
echo "\nAvec echo :\n";
echo true;
echo "\n";
echo false;
echo "\n";

echo "\nAvec var_dump :\n";
var_dump(true);
var_dump(false);
echo "\nConversion en bool :\n";

var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) array());

echo "</pre>";
?>

