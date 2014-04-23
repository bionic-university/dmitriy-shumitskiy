<?php
echo ' Enter the string: ';
$a = fgets(STDIN, 255);
$l = strlen($a);
	foreach(count_chars($a,1) as $b => $result){
echo "You enter $result times the symbol \"",chr($b) ,"\" in the string $a.\n";
	}

echo "String length : $l";
?>

