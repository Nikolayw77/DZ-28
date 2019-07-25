<?php

$array1 = [1, 2, 3];
$array2 = [2, 3, 4];

function intersection($arr1, $arr2)
{
	$intersecArr = [];
	foreach ($arr1 as $elem1) {
		foreach ($arr2 as $elem2){
			if ($elem1 == $elem2) {
				$intersecArr[] = $elem1;
			}
		}
	}
	return $intersecArr;
}

var_dump (intersection($array1, $array2));