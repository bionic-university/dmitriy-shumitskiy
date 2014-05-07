<?php
/**
*Программа считывает строку введенную с клавиатуры
*и выводит статистику по частоте встречающихся сиволом
*в введеной строке.
*/
echo ' Enter the string: ';
$enterString = fgets(STDIN, 255);
$lengthString = strlen($enterString);
foreach (count_chars ($enterString,1) as $b => $result){
	echo "You enter $result times the symbol \"",chr($b) ,"\" in the string $enterString.\n";
}
echo "String length : $lengthString";
?>

