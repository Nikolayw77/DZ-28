<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function evenDigitals($arr)
{
	$evens = [];
	foreach ($arr as $elem) {
		if ($elem%2 == 0) {
			$evens[] = $elem;
		}
	}
	return $evens;
}

var_dump (evenDigitals($array));
