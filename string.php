<?php
$str = "Hello world";
$str1 = $str;
$str = strtoupper($str);
echo "String to uppercase : $str"."</br>";
$str = strtolower($str);
echo "String first character convert to upper : $str"."</br>";
$str = ucwords($str);
echo "String first character in each word convert to upper : $str"."</br>";
$str = strrev($str1);
echo "Reverse of a string : $str"."</br>";
$str = strlen($str1);
echo "Length of the string :$str"."</br>";
$str = lcfirst($str1);
echo "String first character convert to lower :$str"."</br>";

?>