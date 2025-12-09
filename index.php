<?php

echo "<pre>";

echo "Задание №1" . "\n";
echo "Текущий файл: " . __FILE__ . "\n";
echo "Текущая строка: " . __LINE__ . "\n\n";

echo "Задание №2";

$name = "Настюшка";
$age = "23 года";
$Var = <<<HEREDOC_VARIABLE

Имя: $name
Возраст: $age
HEREDOC_VARIABLE;

echo $Var . "\n\n";

echo "Задание №3" . "\n";

$a='Рыба';
$b='человек';

echo $a . ' рыбою сыта, а ' . $b . ' человеком';

echo "</pre>";
?>
