<?php
// Генерация случайных аргументов из интервала [-20, 20]
$c = rand(-20, 20);
$d = rand(-20, 20);
$a = rand(-20, 20);
// Вычисление значения заданного выражения
//$result = (((2 * $c) / $d) + 2) / ($d - $a * $a - 1);
$result = ((12 / $c) + 73 - $d * $d) / ($a * $a - 2 * $a);
// Вывод формулы с заменой имен переменных на их значения и результат вычислений
echo "Formula: ((12/$c)+73-$d*$d)/($a*$a - 2*$a) = $result";