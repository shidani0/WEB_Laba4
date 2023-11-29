<?php
// Создание константы NUM_E
define("NUM_E", 2.71828);
// Вывод значения константы
echo "e EQUALS " . NUM_E . "<br>";
// Присвоение переменной $num_e1 значения константы
$num_e1 = NUM_E;
// Вывод имени переменной, ее значения и типа
echo "\$num_e1 = " . $num_e1 . " " . gettype($num_e1) . "<br>";
// Изменение типа переменной $num_e1 на строковый и вывод значения и типа
$num_e1 = (string)$num_e1;
echo "\$num_e1 = " . $num_e1 . " " . gettype($num_e1) . "<br>";
// Изменение типа переменной $num_e1 на целочисленный и вывод значения и типа
$num_e1 = (int)$num_e1;
echo "\$num_e1 = " . $num_e1 . " " . gettype($num_e1) . "<br>";
// Изменение типа переменной $num_e1 на булевский и вывод значения и типа
$num_e1 = (bool)$num_e1;
echo "\$num_e1 = " . $num_e1 . " " . gettype($num_e1) . "<br>";
