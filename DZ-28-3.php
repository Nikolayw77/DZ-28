<?php

$array = [1, 
          2, 
          3, 
         [4, 5, 6]
];


function allSum($arr)
{
    static $sum = 0;
	
	foreach ($arr as $elem) {
		if (!(is_array($elem))) {
			$sum += $elem;
		} else {
		    allSum($elem);
	   }
	}
	return $sum;
}

echo allSum($array);